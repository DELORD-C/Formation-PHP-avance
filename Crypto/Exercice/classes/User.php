<?php

class User {
    function __construct(
        public ?int $id,
        public ?string $nom,
        public ?string $prenom,
        public ?string $email,
        public ?string $password
    ) {}
}