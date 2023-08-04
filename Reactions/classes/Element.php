<?php

abstract class Element implements React {

    function status () {
        return " suffers " . get_class($this) . ".";
    }
}