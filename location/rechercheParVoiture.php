<?php

include('php/bdd.php');
include('php/functions.php');

if (checkForm(['marque', 'modele'])) {
    $clients = [];

    $query = $conn->prepare("SELECT * FROM voitures WHERE marque LIKE '%:marque%' AND modele LIKE '%:modele%'");
    $query->bindParam(':marque', $_POST['marque']);
    $query->bindParam(':modele', $_POST['modele']);
    $query->execute();
    $voitures = $query->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer pour chaque voiture, les locations liées



    // Pour chaque location, récupérer le client et le stocker dans le tableau $clients



    // Afficher la liste des clients.
    
}

?>

<form method="POST">
    <input type="text" name="marque" placeholder="Marque" require>
    <input type="text" name="modele" placeholder="Modele" require>
    <input type="submit" value="Ajouter">
</form>