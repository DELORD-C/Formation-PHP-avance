<?php

require('classes/Autoloader.php');
$app = new App();
$app->addContent('Secret');

$auth = new Auth;
$auth->check();