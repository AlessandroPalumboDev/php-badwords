<?php
$parola = $_GET ['parola'];
$testo = $_GET ['testo'];

echo 'Questo è il testo da censurare:' . ' ' . $testo . '. ';
echo 'Questa è la lunghezza del testo da censurare' . strlen($testo);