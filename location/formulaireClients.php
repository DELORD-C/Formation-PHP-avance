<?php

include('php/bdd.php');

if (checkForm(['nom', 'prenom', 'codePostal', 'localite', 'rue', 'numero', 'telephone', 'email'])) {
    if (insert($conn, 'clients', [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'codePostal' => $_POST['codePostal'],
        'localite' => $_POST['localite'],
        'rue' => $_POST['rue'],
        'numero' => $_POST['numero'],
        'telephone' => $_POST['telephone'],
        'email' => $_POST['email']
    ])) {
        echo "<div class='alert alert-success'>Client ajouté avec succès</div>";
    }
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