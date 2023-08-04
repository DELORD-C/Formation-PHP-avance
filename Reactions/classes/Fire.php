<?php

class Fire extends Element {
    function react(Element $element): bool|string
    {
        switch(get_class($element)) {
            case "Fire":
                return false;

            case "Water":
                return " suffers from Evaporate.";
        }
    }
}