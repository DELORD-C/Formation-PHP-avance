<?php

class DB {
    private PDO $conn;

    function __construct() {
        $this->conn = new PDO("mysql:dbname=crypto;host=localhost", "root", "");
    }

    function getConn () {
        return $this->conn;
    }

    function insert (string $table, array $values)
    {
        $queryString = "INSERT INTO $table (";

        foreach ($values as $column => $value) {
            $queryString .= $column . ', ';
        }

        $queryString = substr($queryString, 0, -2) . ') VALUES (';

        foreach ($values as $column => $value) {
            $queryString .= ':' . $column . ', ';
        }

        $queryString = substr($queryString, 0, -2) . ');';
        $query = $this->conn->prepare($queryString);

        foreach ($values as $column => $value) {
            $query->bindParam(':' . $column, $values[$column]);
        }

        if ($query->execute()) {
            return true;
        }

        return false;
    }

    function getUser (string $email) {
        $query = $this->conn->prepare('SELECT * FROM users WHERE email = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return new User(
                $result['id'],
                $result['nom'],
                $result['prenom'],
                $result['email'],
                $result['password']
            );
        }
    }
}