<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>
    PHP Badwords
    </h1>

    <form action="stampa.php" method="GET">
        <div>
            <label>Parola da censurare</label>
            <input type="text" for="parola" name="parola" id="parola">
        </div>
        <div>
            <label>Testo</label>
            <textarea name="testo" for="testo" id="testo"></textarea>
        </div>
        <div>
            <button>Censura testo</button>
        </div>
    </form>
</body>
</html>