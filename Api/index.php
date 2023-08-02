<?php

$env = json_decode(file_get_contents("env.json"));

$response = file_get_contents('https://api.themoviedb.org/3/search/movie?api_key='
    . $env->api_key
    . '&query=barbie');

$resultat = json_decode($response);

var_dump($resultat);