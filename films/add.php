<?php

include('classes/Autoloader.php');
$db = new DB();

include('templates/header.php');
include('templates/create.html');
include('templates/footer.html');

if (Form::checkData(['title', 'resume', 'genre'])) {
    $image = null;
    
    if (isset($_FILES['image']))
        $image = Uploader::upload($_FILES['image']); 

    $film = new Film(
        null,
        $_POST['title'],
        $_POST['resume'],
        $_POST['genre'],
        $image
    );

    $db->saveFilm($film);
}