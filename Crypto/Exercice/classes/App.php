<?php

class App {
    private string $content = "";

    function __construct()
    {
        include __DIR__ . '/../templates/header.php';
        //On ajoute le header à l'initialisation de notre application
    }

    function addContent (string $content) {
        $this->content .= $content;
    }

    function __destruct()
    {
        echo $this->content;
        include __DIR__ . '/../templates/footer.php';
        //On ajoute le contenu et le footer lors de la destruction de notre objet donc à al fin du script php.
    }
}