<?php

class PasswordChecker {
    static function check($password): bool
    {
        preg_match("/^(?=\S*[A-Z])(?=\S*[a-z])(?=\S*[\d]).{8,}$/", $_POST['password'], $matches);
        return !empty($matches);
    }
}