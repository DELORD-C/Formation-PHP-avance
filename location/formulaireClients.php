<?php

include('php/bdd.php');

if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['codePostal']) &&
    isset($_POST['localite']) &&
    isset($_POST['rue']) &&
    isset($_POST['numero']) &&
    isset($_POST['telephone']) &&
    isset($_POST['email'])
) {
    $query = $conn->prepare("INSERT INTO clients (nom, prenom, codePostal, localite, rue, numero, telephone, email) VALUES (:nom, :prenom, :codePostal, :localite, :rue, :numero, :telephone, :email)");
    $query->bindParam(':nom', $_POST['nom']);
    $query->bindParam(':prenom', $_POST['prenom']);
    $query->bindParam(':codePostal', $_POST['codePostal']);
    $query->bindParam(':localite', $_POST['localite']);
    $query->bindParam(':rue', $_POST['rue']);
    $query->bindParam(':numero', $_POST['numero']);
    $query->bindParam(':telephone', $_POST['telephone']);
    $query->bindParam(':email', $_POST['email']);
    $query->execute();
    echo "<div class='alert alert-success'>Client ajouté avec succès</div>";
}

?>

<form method="POST">
    <input type="text" name="nom" placeholder="Nom" require>
    <input type="text" name="prenom" placeholder="Prénom" require>
    <input type="text" name="codePostal" placeholder="Code Postal" require>
    <input type="text" name="localite" placeholder="Ville" require>
    <input type="text" name="rue" placeholder="Rue" require>
    <input type="text" name="numero" placeholder="Numéro" require>
    <input type="text" name="telephone" placeholder="Téléphone" require>
    <input type="email" name="email" placeholder="Email" require>
    <input type="submit" value="Ajouter">
</form>