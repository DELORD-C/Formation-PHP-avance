<?php

class Option {
    function __construct (
        private $value,
        private $label,
        private $selected = ""
    ) {}

    function html () {
        return "<option " . $this->selected . " value='" . $this->value . "'>" . $this->label . "</option>";
    }
}