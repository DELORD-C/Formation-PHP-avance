<?php

class Auth {
    function __construct()
    {
        session_start();
    }

    function connect (User $user) {
        $_SESSION['connected'] = 'true';
        $_SESSION['id'] = $user->id;
    }

    function disconnect () {
        session_destroy();
    }

    function check () {
        if (
            isset($_SESSION['connected'])
            && $_SESSION['connected'] == 'true'
            && isset($_SESSION['id'])
        ) {
            return true;
        }
        header('location: login.php');
    }
}