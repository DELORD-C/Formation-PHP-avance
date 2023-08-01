<?php include('templates/header.php'); ?>

<h1 class="display-5 text-center mb-3">Rechercher des clients</h1>
<form method="POST" class="w-50 m-auto">
    <input class="form-control mb-3" type="text" name="marque" placeholder="Marque" require>
    <input class="form-control mb-3" type="text" name="modele" placeholder="Modele" require>
    <div class="d-grid gap-2">
        <input class="btn btn-primary" type="submit" value="Ajouter">
    </div>
</form>

<?php

include('php/bdd.php');
include('php/functions.php');

if (checkForm(['marque', 'modele'])) {
    $clients = [];

    $marque = '%'.$_POST['marque'].'%';
    $modele = '%'.$_POST['modele'].'%';

    $query = $conn->prepare("SELECT * FROM voitures WHERE marque LIKE :marque AND modele LIKE :modele");
    $query->bindParam(':marque', $marque);
    $query->bindParam(':modele', $modele);
    $query->execute();
    $voitures = $query->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer pour chaque voiture, les locations liées
    foreach ($voitures as $voiture) {
        $query = $conn->prepare("SELECT * FROM locations WHERE immatriculation = :immatriculation");
        $query->bindParam(':immatriculation', $voiture['immatriculation']);
        $query->execute();
        $locations = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($locations as $location) {
            $query = $conn->prepare("SELECT * FROM clients WHERE id = :id");
            $query->bindParam(':id', $location['idClient']);
            $query->execute();
            $client = $query->fetch();
            if (!in_array($client, $clients)) {
                array_push($clients, $client);
            }
        }
    }

    foreach ($clients as $client) {
        echo '<p>' . $client['nom'] . ' ' . $client['prenom'] . '</p>';
    }
}

include('templates/footer.html');