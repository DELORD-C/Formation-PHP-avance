<?php

include('php/bdd.php');
include('templates/header.php');

$query = $conn->prepare("SELECT * FROM clients");
$query->execute();
$clients = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<h1 class="display-5 text-center mb-3">Liste des clients</h1>

<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>

<?php

foreach ($clients as $client) {
    ?>
        <tr>
            <td><?=$client['nom']?></td>
            <td><?=$client['prenom']?></td>
            <td><?=$client['telephone']?></td>
            <td><?=$client['email']?></td>
        </tr>
    <?php
}

?>

    </tbody>
</table>

<?php include('templates/footer.html');