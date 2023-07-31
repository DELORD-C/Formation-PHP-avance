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

?>

<form method="POST">
    <input type="text" name="idClient" placeholder="Id du client" require>
    <input type="text" name="immatriculation" placeholder="Immatriculation" require>
    <label for="dateDebut">Date de début</label>
    <input type="datetime-local" name="dateDebut" id="dateDebut" require>
    <label for="dateFin">Date de fin</label>
    <input type="datetime-local" name="dateFin" id="dateFin" require>
    <label for="dateRentree">Date de rentrée</label>
    <input type="datetime-local" name="dateRentree" id="dateRentree" require>
    <label for="assurance">Assurance</label>
    <input type="checkbox" name="assurance" id="assurance">
    <input type="submit" value="Ajouter">
</form>