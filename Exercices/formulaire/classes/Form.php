<?php

class Form implements Html {
    private array $fields = [];

    function __construct(private array $values) {}

    function input(string $name, string $type, array $options = []) {
        array_push($this->fields, new Input($name, $type, $options));
        return $this;
    }

    function select(string $name, array $listeOptions = [], array $options = []) {
        array_push($this->fields, new Select($name, $listeOptions, $options));
        return $this;
    }

    function html ():string {
        $html = "<form>";
        foreach ($this->fields as $field) {
            $html .= $field->html();
        }
        $html .= "</form>";
        return $html;
    }
}