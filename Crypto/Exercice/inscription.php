<?php

require('classes/Autoloader.php');
$app = new App();
$app->addContent(file_get_contents('templates/inscription.html'));


if (Form::checkData(['nom', 'prenom', 'email', 'password', 'password-confirm'])) {
    if (
        $_POST['password'] == $_POST['password-confirm']
        && PasswordChecker::check($_POST['password'])
    ) {
        $db = new DB();
        $db->insert('users', [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'email' => $_POST['email'],
            'password' => Hasher::hash($_POST['password'])
        ]);
    }
}