//paklausti, kodel neuzsideda spalva
<?php
$color = "";
$year = $_GET['year'];
$cycle = ((abs($year - 1984)) % 60 + 1) % 10;
switch (true) {
    case ($cycle == 0 || $cycle == 9):
        $color = 'black';
        break;
    case ($cycle == 1 || $cycle == 2):
        $color = 'green';
        break;
    case ($cycle == 3 || $cycle == 4):
        $color = 'red';
        break;
    case ($cycle == 5 || $cycle == 6):
        $color = 'yellow';
        break;
    case ($cycle == 7 || $cycle == 8):
        $color = 'white';
        break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Japonų kalendorius spalva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
</head>
<body>
<?php include "header.php" ?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center">
    <form class=" col-md-5 mx-auto border border-primary p-3" action="trikampioats.php" method="get">
        <h1 class="text-center mb-3"> Japonų kalendorius</h1>
        <div class="mb-3">
            <label for="a" class="form-label">Jūsų pasirinktų metų spalva yra:</label>
            <input type="number" name="a" class="form-control .<?= $color ?> " id="a" placeholder="<?= $year;
            echo " was " . $color; ?>"
                   onkeyup="enableSubmit()">
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-danger" href="japonukalendorius.php">Skaičiuoti kitų metų spalvą</a>
        </div>
    </form>
</div>
</body>
</html>