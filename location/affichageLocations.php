<?php

include('php/bdd.php');

$query = $conn->prepare("SELECT * FROM locations");
$query->execute();
$locations = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <tr>
            <th>Id du client</th>
            <th>Immatriculation</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Assurance</th>
        </tr>
    </thead>
    <tbody>

<?php

foreach ($locations as $client) {
    ?>
        <tr>
            <td><?=$client['idClient']?></td>
            <td><?=$client['immatriculation']?></td>
            <td><?=$client['dateDebut']?></td>
            <td><?=$client['dateFin']?></td>
            <td><?=$client['assurance']?></td>
        </tr>
    <?php
}

?>

    </tbody>
</table>