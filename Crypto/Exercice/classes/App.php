<?php

class App {
    private string $content = "";

    function __construct()
    {
        include __DIR__ . '/../templates/header.php';
    }

    function addContent (string $content) {
        $this->content .= $content;
    }

    function __destruct()
    {
        echo $this->content;
        include __DIR__ . '/../templates/footer.php';
    }
}