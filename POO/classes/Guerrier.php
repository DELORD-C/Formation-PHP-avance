<?php

class Guerrier extends Personnage {
    use Politesse;

    function warCry() {
        $this->attack += 2;
    }
}