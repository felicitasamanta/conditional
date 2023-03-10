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
        <form class=" col-md-5 mx-auto border border-primary p-3" action="trikampioats.php" method="get">
            <h1 class="text-center mb-3"> Trikampio skaičiavimas</h1>
            <div class="mb-3">
                <label for="a" class="form-label">Kraštinė a</label>
                <input type="number" name="a" class="form-control" id="a" onkeyup="enableSubmit()">
            </div>
            <div class="mb-3">
                <label for="b" class="form-label">Kraštinė b</label>
                <input type="number" name="b" class="form-control" id="b" onkeyup="enableSubmit()">
            </div>
            <div class="mb-3">
                <label for="c" class="form-label">Kraštinė c</label>
                <input type="number" name="c" class="form-control" id="c" onkeyup="enableSubmit()">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" disabled class="btn mx-auto btn-primary">Skaičiuoti</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<?php include "script.php" ?>;
</body>
</html>