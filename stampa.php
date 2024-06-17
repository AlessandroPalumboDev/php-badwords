<?php

$parola = $_GET ['parola'];

$testo = $_GET ['testo'];
$testo_len = strlen($testo);

$testo_censurato = str_replace($parola, '***', $testo);
$testo_censurato_len = strlen($testo_censurato);

// echo 'Questo è il testo da censurare:' . ' ' . $testo . '. ';
// echo 'Questa è la lunghezza del testo da censurare' . $testo_len . '. ';
// echo 'Questo è il testo censurato:' . ' ' . $testo_censurato . '. ';
// echo 'Questa è la lunghezza del testo censurato' . $testo_censurato_len . '. ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>
    PHP Badwords
    </h1>

    <div>
        <h3>
        Questo è il testo da censurare:
        </h3>
        <p><?php echo $testo ?></p>
    </div>
    <div>
        <h3>
        Questa è la lunghezza del testo da censurare:
        </h3>
        <span><?php echo $testo_len ?></span>
    </div>
    <div>
        <h3>
        Questo è il testo censurato:
        </h3>
        <p>
        <?php echo $testo_censurato ?>
        </p>
    </div>
    <div>
        <h3>
        Questa è la lunghezza del testo censurato:
        </h3>
        <span><?php echo $testo_censurato_len ?></span>
    </div>
</body>
</html>