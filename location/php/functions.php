<?php

function checkForm(array $indexes): bool
{
    foreach ($indexes as $index) {
        if (!isset($_POST[$index])) {
            return false;
        }
    }
    return true;
}

function insert (PDO $conn, string $table, array $values)
{


    //Création du début de la requête
    $queryString = "INSERT INTO $table (";

    //Ajouter les noms de colonne
    foreach ($values as $column => $value) {
        $queryString .= $column . ', ';
    }
    //Retirer le dernier ", " et on ajoute ') VALUES ('
    $queryString = substr($queryString, 0, -2) . ') VALUES (';

    //Ajoute les pseudos variables pour chaque colonne
    foreach ($values as $column => $value) {
        $queryString .= ':' . $column . ', ';
    }
    //Retirer le dernier ", " et on ajoute ');'
    $queryString = substr($queryString, 0, -2) . ');';


    //Une fois notre query complete, on l'utilise dans la méthode prepare de l'objet PDO
    $query = $conn->prepare($queryString);

    
    //On bind chaque paramètre à sa pseudo variable
    foreach ($values as $column => $value) {
        $query->bindParam(':' . $column, $values[$column]);
    }

    //Si la requête s'execute
    if ($query->execute()) {
        //On retourne vrai
        return true;
    }
    //Sinon on retourne false
    return false;
}