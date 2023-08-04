<?php

include('vendor/autoload.php');

// On créé une instance de l'objet TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Ajouter une page au pdf
$pdf->AddPage();

// Création d'une chaine de caractère html
$html = "<h1>Dawan</h1>
<p>La fromation PHP c'est cool !</p>";

// Ajout du html dans le pdf
$pdf->writeHTMLCell(0, 0, 0, 0, $html);

// Affichage du pdf dans la page web
$pdf->Output('test.pdf');