<?php

include('classes/Autoloader.php');

$perso1 = new Guerrier("Gimly", 20, 10, 10);
$perso2 = new Mage("Gandalf", 20, 10, 10);

$perso1->setHp($perso1->getHp() - $perso2->getAttack());

// echo $perso1->getHp();

unset($perso1);

var_dump($perso1);