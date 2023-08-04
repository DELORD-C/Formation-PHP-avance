<?php

class Form {
    static function checkData(array $indexes): bool
    {
        foreach ($indexes as $index) {
            if (!isset($_POST[$index]) || empty($_POST[$index]) || $_POST[$index] == "") {
                return false;
            }
        }
        return true;
    }

    static function checkFilm(): bool
    {
        if (!isset($_GET['film']) || empty($_GET['film']) || $_GET['film'] == "") {
            return false;
        }
        return true;
    }
}