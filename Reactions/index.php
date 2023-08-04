<?php

require('classes/Autoloader.php');

$player = new Player(20);
$ennemy = new Ennemy("Le micro de Souhail", 100);

$player->attack($ennemy, 'Fire');
$player->attack($ennemy, 'Water');
$player->attack($ennemy, 'Water');
$player->attack($ennemy, 'Water');
$player->attack($ennemy, 'Fire');


