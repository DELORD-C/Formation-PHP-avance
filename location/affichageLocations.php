<?php

include('php/bdd.php');
include('templates/header.php');

$query = $conn->prepare("SELECT * FROM locations");
$query->execute();

$template = file_get_contents('templates/tableLocations.html');
$locations = $query->fetchAll(PDO::FETCH_ASSOC);

$liste = "";

foreach ($locations as $location) {
        $liste .= "<tr>
            <td>" . $location['idClient'] . "</td>
            <td>" . $location['immatriculation'] . "</td>
            <td>" . $location['dateDebut'] . "</td>
            <td>" . $location['dateFin'] . "</td>
            <td>" . $location['assurance'] . "</td>
        </tr>";
}

$template = str_replace("{{ LOCATIONS }}", $liste, $template);
echo $template;

include('templates/footer.html');