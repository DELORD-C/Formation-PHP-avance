<?php

class Select {
    function __construct (
        private $name,
        private $listeOptions = [],
        private $options = []
    ) {}

    function html () {
        $label = isset($this->options['label']) ? $this->options['label'] : $this->name;
        $html = "<p>
            <label for='" . $this->name . "'>$label</label>
            <select name='" . $this->name . "' id='" . $this->name . "'";
            
        foreach ($this->options as $attr => $attrValue) {
            if ($attr != 'label') {
                $html .= " " . $attr . "='" . $attrValue . "'";
            }
        }

        $html .= ">";
        
        foreach ($this->listeOptions as $option) {
            $html .= (new Option($option[0], $option[1], isset($option[2]) ? $option[2] : null))->html();
        }

        $html .= "</select></p>";
        return $html;
    }
}