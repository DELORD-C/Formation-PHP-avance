<form method="POST">
    <input type="text" name="marque" placeholder="Marque" require>
    <input type="text" name="modele" placeholder="Modele" require>
    <input type="submit" value="Ajouter">
</form>

<?php

include('php/bdd.php');
include('php/functions.php');

if (checkForm(['marque', 'modele'])) {
    $clients = [];

    $marque = '%'.$_POST['marque'].'%';
    $modele = '%'.$_POST['modele'].'%';

    $query = $conn->prepare("
        SELECT DISTINCT
            nom, prenom
        FROM
            voitures
                INNER JOIN
            locations USING (immatriculation)
                INNER JOIN
            clients ON clients.id = locations.idClient
        WHERE
            marque LIKE :marque
            AND modele LIKE :modele
    ");
    $query->bindParam(':marque', $marque);
    $query->bindParam(':modele', $modele);
    $query->execute();
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer pour chaque voiture, les locations liées
    

    foreach ($clients as $client) {
        echo '<p>' . $client['nom'] . ' ' . $client['prenom'] . '</p>';
    }
}