<?php

class Player {

    function __construct(private int $attack) {}

    function attack(Ennemy $target, ?string $element) {
        $target->damage($this->attack, new $element);
    }
}