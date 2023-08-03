<?php

require('classes/Autoloader.php');

$form = new Form($_POST);
$form->input("text", "nom", ['label' => "Nom", 'value' => "bonjour"])
    ->input("radio", "radio", ['label' => "Radio1", 'tag' => "span", 'value' => "radio1", 'checked' => 'checked'])
    ->input("radio", "radio", ['label' => "Radio2", 'tag' => "span", 'value' => "radio2"])
    ->input("range", "range", ['label' => "Range", 'value' => 10, 'min' => 0, 'max' => 20])
    ->select("liste[]", [[1, "choix1"], [2, "choix2", "selected"], [3, "choix3"]], ['label' => 'Choix', 'size' => 4, 'multiple' => 'multiple'])
    ->input('age', "number", ['label' => 'Age', 'min' => 0, 'max' => '100'])
    ->input("submit", "envoyer", ['value' => "Envoyer"]);
?>

<?= $form->html() ?>

<?php var_dump($_POST) ?>