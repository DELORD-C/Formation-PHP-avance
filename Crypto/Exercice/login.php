<?php

require('classes/Autoloader.php');
$app = new App();
$app->addContent(file_get_contents('templates/login.html'));

if (Form::checkData(['email', 'password'])) {
    if (
        PasswordChecker::check($_POST['password'])
    ) {
        $db = new DB;
        if($user = $db->getUser($_POST['email'], $_POST['password'])) {
            // Connecter l'utilisateur
            $auth = new Auth;
            $auth->connect($user);
            header('location: accueil.php');
        }
    }
}