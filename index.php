<?php
// Creare una variabile con un paragrafo di testo.
// Visualizzare a schermo il paragrafo con la relative lunghezza
// e sostituire la badword passata in GET con tre *

$replacement = $argv[1];

$testo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis est a maximus aliquet. Nunc aliquam fringilla pulvinar. Sed aliquam mattis dolor sed hendrerit.';

echo "\r\n" . 'Lunghezza stringa: ' . strlen($testo);
echo "\r\n" . str_replace($replacement, '***', $testo);
// echo "\r\n" . $testo;
?>