<?php

include('php/bdd.php');
include('templates/header.php');

$query = $conn->prepare("SELECT * FROM voitures");
$query->execute();
$voitures = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<h1 class="display-5 text-center mb-3">Liste des voitures</h1>

<table class="table">
    <thead>
        <tr>
            <th>Immatriculation</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Cylindrée</th>
            <th>Date d'achat</th>
        </tr>
    </thead>
    <tbody>

<?php

foreach ($voitures as $voiture) {
    ?>
        <tr>
            <td><?=$voiture['immatriculation']?></td>
            <td><?=$voiture['marque']?></td>
            <td><?=$voiture['modele']?></td>
            <td><?=$voiture['cylindree']?></td>
            <td><?=$voiture['dateAchat']?></td>
        </tr>
    <?php
}

?>

    </tbody>
</table>

<?php include('templates/footer.html');