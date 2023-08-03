<?php

class Option implements Html {
    function __construct (
        private string $value,
        private string $label,
        private ?string $selected = ""
    ) {}

    function html ():string
    {
        return "<option " . $this->selected . " value='" . $this->value . "'>" . $this->label . "</option>";
    }
}