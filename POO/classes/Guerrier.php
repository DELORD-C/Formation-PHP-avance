<?php

class Guerrier extends Personnage {
    function warCry() {
        $this->attack += 2;
    }
}