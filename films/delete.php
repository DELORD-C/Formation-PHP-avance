<?php

include('classes/Autoloader.php');
$db = new DB();

if (Form::checkFilm() && $film = $db->getFilm($_GET['film'])) {
        $db->deleteFilm($film);
}
else {
    header('Location: /POE-PHP-AVANCE/films/list.php');
}

