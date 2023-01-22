<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
</head>
<body>
<?php include "header.php" ?>
<div class="container">
    <div class=" view d-flex flex-wrap justify-content-between align-items-center">
        <form class="col-md-5 mx-auto border border-primary p-3">
            <h1 class="text-center mb-3"> Trikampio skaičiavimas</h1>
            <div class="mb-3">
                <label for="a" class="form-label">Kraštinė a</label>
                <input type="number" disabled class="form-control" id="a" placeholder="<?= $a ?>">
            </div>
            <div class="mb-3">
                <label for="b" class="form-label">Kraštinė b</label>
                <input type="number" disabled class="form-control" id="b" placeholder="<?= $b ?>">
            </div>
            <div class="mb-3">
                <label for="c" class="form-label">Kraštinė c</label>
                <input type="number" disabled class="form-control" id="c" placeholder="<?= $c ?>">
            </div>
            <?php
            if ($a !== 0 && $b !== 0 && $c !== 0) {
                if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                    if ($a === $b && $b === $c) { ?>
                        <div>Trikampis egzistuoja. Jo tipas - lygiakraštis</div>
                    <?php } elseif ($a === $b || $b === $c || $a === $c) { ?>
                        <div>Trikampis egzistuoja. Jo tipas - lygiašonis</div>
                    <?php } else { ?>
                        <div>Trikampis egzistuoja. Jo tipas - įvairiakraštis</div> <?php } ?>
                <?php } else {
                    '' ?>
                <?php }
            } ?>
            <a href="./index.php">Skaičiuoti kitą trikampį</a>
        </form>
    </div>
</div>
</body>
</html>