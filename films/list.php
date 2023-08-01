<?php

include('classes/Autoloader.php');

$db = new DB();

include('templates/header.php');

echo Parser::filmTab($db->getAllFilms());

include('templates/footer.html');