<?php

session_start();

var_dump($_SESSION);

// vérifier la soumission d'un formulaire de connexion (mdp + email)
// si c'est ok alors on créé une variable dans la session pour s'en rapeller

// $_SESSION['connected'] = 'true';

if (!isset($_SESSION['connected']) && $_SESSION['connected'] != 'true') {
    header('location: connexion.php');
}

// session_destroy();