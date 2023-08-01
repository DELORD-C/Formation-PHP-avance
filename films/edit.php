<?php

include('classes/Autoloader.php');
$db = new DB();

include('templates/header.php');

if (Form::checkFilm() && $film = $db->getFilm($_GET['film'])) {

    if (Form::checkData(['title', 'resume', 'genre'])) {

        $image = null;

        if (isset($_FILES['image']) && !empty($_FILES['image'])) {
            if (!empty($film->getImage())) {
                Uploader::delete($film->getImage());
            }
    
            $image = Uploader::upload($_FILES['image']); 
        }

        $film = new Film(
            $_GET['film'],
            $_POST['title'],
            $_POST['resume'],
            $_POST['genre'],
            $image
        );

        $db->updateFilm($film);
    }

    echo Parser::filmEditForm($film); 
}
else {
    header('Location: /POE-PHP-AVANCE/films/list.php');
}

include('templates/footer.html');

