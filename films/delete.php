<?php

include('classes/Autoloader.php');
$db = new DB();

if (Form::checkFilm() && $film = $db->getFilm($_GET['film'])) {
        if (!empty($film->getImage())) {
            Uploader::delete($film->getImage());
        }
        $db->deleteFilm($film);
}
else {
    header('Location: /POE-PHP-AVANCE/films/list.php');
}

