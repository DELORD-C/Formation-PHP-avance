<?php

include('classes/Autoloader.php');
$db = new DB();

include('templates/header.php');
include('templates/create.html');
include('templates/footer.html');

if (Form::checkData(['title', 'resume', 'genre'])) {
    $film = new Film(
        null,
        $_POST['title'],
        $_POST['resume'],
        $_POST['genre']
    );

    $db->saveFilm($film);
}