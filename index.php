<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">
        PHP Badwords
        </h1>
    
        <form action="stampa.php" method="GET">
            <div class="row">
                <label class="form-label">Parola da censurare</label>
                <input class="form-control" type="text" for="parola" name="parola" id="parola" placeholder="Scrivi qui la parola che vuoi venga censurata">
            </div>
            <div class="row">
                <label class="form-label">Testo</label>
                <textarea class="form-control" name="testo" for="testo" id="testo" placeholder="Scrivi qui il testo da censurare"></textarea>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary">Censura testo</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>