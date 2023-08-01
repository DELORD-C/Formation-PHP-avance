<?php

class Personnage {

    function __construct (
        protected string $name,
        protected int $hp,
        protected int $mp,
        protected int $attack
    ) {}

    function getName () {
        return $this->name;
    }

    function setName (string $name) {
        $this->name = $name;
    }

    function getHp () {
        return $this->hp;
    }

    function setHp (int $hp) {
        $this->hp = $hp;
    }

    function getMp () {
        return $this->mp;
    }

    function setMp (int $mp) {
        $this->mp = $mp;
    }

    function getAttack () {
        return $this->attack;
    }

    function setAttack (int $attack) {
        $this->attack = $attack;
    }
}