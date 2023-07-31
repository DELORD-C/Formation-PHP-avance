<?php

$conn = new PDO("mysql:dbname=location_de_voiture;host=localhost", "root", "");

if (
    isset($_POST['immatriculation']) &&
    isset($_POST['marque']) &&
    isset($_POST['modele']) &&
    isset($_POST['cylindree']) &&
    isset($_POST['dateAchat'])
) {
    $query = $conn->prepare("INSERT INTO voitures (immatriculation, marque, modele, cylindree, dateAchat) VALUES (:immatriculation, :marque, :modele, :cylindree, :dateAchat)");
    $query->bindParam(':immatriculation', $_POST['immatriculation']);
    $query->bindParam(':marque', $_POST['marque']);
    $query->bindParam(':modele', $_POST['modele']);
    $query->bindParam(':cylindree', $_POST['cylindree']);
    $query->bindParam(':dateAchat', $_POST['dateAchat']);
    $query->execute();
    echo "<div class='alert alert-success'>Voiture ajoutée avec succès</div>";
}

?>

<form method="POST">
    <input type="text" name="immatriculation" placeholder="Immatriculation" require>
    <input type="text" name="marque" placeholder="Marque" require>
    <input type="text" name="modele" placeholder="Modele" require>
    <input type="number" name="cylindree" placeholder="Cylindrée" require>
    <input type="date" name="dateAchat" placeholder="Date d'achat" require>
    <input type="submit" value="Ajouter">
</form>