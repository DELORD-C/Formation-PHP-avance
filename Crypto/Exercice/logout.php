<?php

require('classes/Autoloader.php');
$app = new App();
$auth = new Auth();
$auth->disconnect();