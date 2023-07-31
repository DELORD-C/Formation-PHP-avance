<?php

include('php/bdd.php');

$query = $conn->prepare("SELECT * FROM clients");
$query->execute();
$clients = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
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