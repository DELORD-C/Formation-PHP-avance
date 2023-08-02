<?php

class Mage extends Personnage {
    use Politesse;

    function bouleDeFeu() {
        $this->attack += 10;
        $this->mp -= 5;
    }
}