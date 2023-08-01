<?php

include('php/bdd.php');
include('php/functions.php');
include('templates/header.php');

if (checkForm(['nom', 'prenom', 'codePostal', 'localite', 'rue', 'numero', 'telephone', 'email'])) {
    if (insert($conn, 'clients', [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'codePostal' => $_POST['codePostal'],
        'localite' => $_POST['localite'],
        'rue' => $_POST['rue'],
        'numero' => $_POST['numero'],
        'telephone' => $_POST['telephone'],
        'email' => $_POST['email']
    ])) {
        echo "<div class='alert alert-success'>Client ajouté avec succès</div>";
    }
}

include('templates/formulaireClients.html');
include('templates/footer.html');