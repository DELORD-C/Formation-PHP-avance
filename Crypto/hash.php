<?php

$mdp = "AzErTy1234!";

$mdp_hash = password_hash($mdp, PASSWORD_BCRYPT);

$form = "AzErTy1234!";

var_dump(password_verify($form, $mdp_hash));