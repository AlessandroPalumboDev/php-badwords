<?php

$parola = $_GET ['parola'];

$testo = $_GET ['testo'];
$testo_len = strlen($testo);

$testo_censurato = str_replace($parola, '***', $testo);
$testo_censurato_len = strlen($testo_censurato);

echo 'Questo è il testo da censurare:' . ' ' . $testo . '. ';
echo 'Questa è la lunghezza del testo da censurare' . $testo_len . '. ';
echo 'Questo è il testo censurato:' . ' ' . $testo_censurato . '. ';
echo 'Questa è la lunghezza del testo censurato' . $testo_censurato_len . '. ';


?>
