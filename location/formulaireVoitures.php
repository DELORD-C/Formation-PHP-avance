<?php

include('php/bdd.php');

if (checkform(['immatriculation', 'marque', 'modele', 'cylindree', 'dateAchat'])) {
    if (insert($conn, 'voitures', [
        'immatriculation', $_POST['immatriculation'],
        'marque', $_POST['marque'],
        'modele', $_POST['modele'],
        'cylindree', $_POST['cylindree'],
        'dateAchat', $_POST['dateAchat']
    ])) {
        echo "<div class='alert alert-success'>Voiture ajoutée avec succès</div>";
    }
}

?>

<form method="POST">
    <input type="text" name="immatriculation" placeholder="Immatriculation" require>
    <input type="text" name="marque" placeholder="Marque" require>
    <input type="text" name="modele" placeholder="Modele" require>
    <input type="number" name="cylindree" placeholder="Cylindrée" require>
    <input type="date" name="dateAchat" require>
    <input type="submit" value="Ajouter">
</form>