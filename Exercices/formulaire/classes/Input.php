<?php

class Input extends AbstractChamp {
    function __construct (
        private string $name,
        private string $type,
        private array $options = []
    ) {
    }

    function html ():string
    {
        // On créé l'html du champ avec les paramètres donnés lors de l'instantiation de l'object
        // On utilise un ternaire pour le label
        $label = isset($this->options['label']) ? $this->options['label'] : $this->name;
        $value = isset($this->options['value']) ? "value='" . $this->options['value'] . "'" : "";
        $html = "<p>
            <label for='" . $this->name . "'>$label</label>
            <input type='" . $this->type . "' name='" . $this->name . "' id='" . $this->name . "'" . $value;
            
        foreach ($this->options as $attr => $attrValue) {
            if ($attr != 'value' && $attr != 'label') {
                $html .= " " . $attr . "='" . $attrValue . "'";
            }
        }

        $html .= "></p>";
        return $html;
    }
}