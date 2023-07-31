<?php

include('php/bdd.php');
include('php/functions.php');

if (checkform(['immatriculation', 'marque', 'modele', 'cylindree', 'dateAchat'])) {
    if (insert($conn, 'voitures', [
        'immatriculation' => $_POST['immatriculation'],
        'marque' => $_POST['marque'],
        'modele' => $_POST['modele'],
        'cylindree' => $_POST['cylindree'],
        'dateAchat' => $_POST['dateAchat']
    ])) {
        echo "<div class='alert alert-success'>Voiture ajoutée avec succès</div>";
    }
}

include('templates/formulaireVoitures.html');