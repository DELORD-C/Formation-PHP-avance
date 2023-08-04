<?php

class Hasher {
    static function hash(string $pass): string {
        return password_hash($pass, PASSWORD_BCRYPT);
    }
}