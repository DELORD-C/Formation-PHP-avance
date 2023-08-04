<?php

class Ennemy {
    private int $maxHp;
    private bool $enraged = false;
    private ?Element $element = null;

    function __construct(private string $name, private int $hp) {
        $this->maxHp = $hp;
    }

    function damage(int $damages, ?Element $element = null) {

        $this->hp = $this->hp - $damages;
        echo "<p>" . $this->name . " takes " . $damages . " damages.</p>";

        echo "<p>" . $this->name . $element->status() . '</p>';
        if ($this->element == null) {
            $this->element = $element;
        }
        else {
            $msg = $this->element->react($element);
            if ($msg) {
                echo "<p>" . $this->name . $msg . '</p>';
                $this->element = null;
            }
        }

        if ($this->hp < 0.1 * $this->maxHp) {
            $this->enrage();
        }
        if ($this->hp <= 0) {
            $this->die();
        }
    }

    function enrage() {
        if (!$this->enraged) {
            echo "<p>" . $this->name . " enters a rage !</p>";
            $this->enraged = true;
        }
    }

    function die() {
        echo "<p>" . $this->name . " dies.</p>";
    }
}