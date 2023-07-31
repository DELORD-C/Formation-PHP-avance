<?php

include('php/bdd.php');
include('php/functions.php');

if (checkForm(['idClient', 'immatriculation', 'dateDebut', 'dateFin', 'dateRentree'])) {

    if (isset($_POST['assurance'])) {
        $assurance = true;
    }
    else {
        $assurance = false;
    }

    if (insert($conn, 'locations', [
        'idClient' => $_POST['idClient'],
        'immatriculation' => $_POST['immatriculation'],
        'dateDebut' => $_POST['dateDebut'],
        'dateFin' => $_POST['dateFin'],
        'dateRentree' => $_POST['dateRentree'],
        'assurance' => $assurance
    ])) {
        echo "<div class='alert alert-success'>Location ajoutée avec succès</div>";
    }
}

include('templates/formulaireLocations.html');