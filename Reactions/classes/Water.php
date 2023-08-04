<?php

class Water extends Element {
    function react(Element $element): bool|string
    {
        switch(get_class($element)) {
            case "Water":
                return false;

            case "Fire":
                return " suffers from Evaporate.";
        }
    }
}