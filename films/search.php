<?php

include('classes/Autoloader.php');

$db = new DB();

include('templates/header.php');

include('templates/search.html');

if (Form::checkData(['title'])) {
    $results = Api::search($_POST['title']);
    echo Parser::apiList($results); 
}

include('templates/footer.html');