<?php

require "classes/Autoloader.php";

$texte = new Input("text", "nom", ['label' => "Nom", 'value' => "bonjour"]);
$radio1 = new Input("radio", "radio", ['label' => "Radio1", 'tag' => "span", 'value' => "radio1", 'checked' => 'checked']);
$radio2 = new Input("radio", "radio", ['label' => "Radio2", 'tag' => "span", 'value' => "radio2"]);
$range = new Input("range", "range", ['label' => "Range", 'value' => 10, 'min' => 0, 'max' => 20]);
$select = new Select("liste[]", [[1, "choix1"], [2, "choix2", "selected"], [3, "choix3"]], ['label' => 'Choix', 'size' => 4, 'multiple' => 'multiple']);
$submit = new Input("submit", "envoyer", ['value' => "Envoyer"]);

?>

<form method='post'>
    <?= "{$texte->html()} {$radio1->html()} {$radio2->html()} {$range->html()} {$select->html()} {$submit->html()}"; ?>
</form>

<?php var_dump($_POST) ?>