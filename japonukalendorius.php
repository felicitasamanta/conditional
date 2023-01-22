<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Japonų kalendorius</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
</head>
<body>
<?php include "header.php" ?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center">
    <form class=" col-md-5 mx-auto border border-primary p-3" action="japonuats.php" method="get">
        <h1 class="text-center mb-3"> Japonų kalendorius</h1>
        <div class="mb-3">
            <label for="year" class="form-label">Įveskite norimus metus</label>
            <input type="number" name="year" class="form-control" id="a" onkeyup="enableSubmit()">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" disabled class="btn mx-auto btn-primary">Sužinoti spalvą</button>
        </div>
    </form>
</div>
<?php include "script.php" ?>;
</body>
</html>