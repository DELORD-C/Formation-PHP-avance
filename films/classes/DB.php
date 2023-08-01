<?php

class DB {
    private PDO $conn;

    function __construct() {
        $this->conn = new PDO("mysql:dbname=films;host=localhost", "root", "");
    }

    function getConn () {
        return $this->conn;
    }

    function saveFilm (Film $film) {
        $query = $this->conn->prepare("INSERT INTO films (title, resume, genre) VALUES
        (:title, :resume, :genre)");
        $title = $film->getTitle();
        $resume = $film->getResume();
        $genre = $film->getGenre();
        $query->bindParam(':title', $title);
        $query->bindParam(':resume', $resume);
        $query->bindParam(':genre', $genre);
        $query->execute();
        header('Location: /POE-PHP-avance/films/list.php');
    }

    function getAllFilms() {
        $query = $this->conn->prepare("SELECT * FROM films");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $films = [];
        foreach ($results as $result) {
            array_push(
                $films,
                new Film($result['id'], $result['title'], $result['resume'], $result['genre'])
            );
        }
        return $films;
    }

    function getFilm(int $id) {
        $query = $this->conn->prepare("SELECT * FROM films WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($film = $query->fetch(PDO::FETCH_ASSOC)) {
            return new Film(
                $film['id'],
                $film['title'],
                $film['resume'],
                $film['genre']
            );
        }
        else {
            return false;
        }
    }

    function updateFilm (Film $film) {
        $query = $this->conn->prepare("UPDATE films SET title = :title, resume = :resume, genre = :genre WHERE id = :id");
        $id = $film->getId();
        $title = $film->getTitle();
        $resume = $film->getResume();
        $genre = $film->getGenre();
        $query->bindParam(':id', $id);
        $query->bindParam(':title', $title);
        $query->bindParam(':resume', $resume);
        $query->bindParam(':genre', $genre);
        $query->execute();
        header('Location: /POE-PHP-avance/films/list.php');
    }

    function deleteFilm (Film $film) {
        $query = $this->conn->prepare("DELETE FROM films WHERE id = :id");
        $id = $film->getId();
        $query->bindParam(':id', $id);
        $query->execute();
        header('Location: /POE-PHP-avance/films/list.php');
    }
}