<?php
    $x = 10;
    $y = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Oefening 3 - Emily Ongenaert</title>
</head>
<body>
<div class="container">
<h1>Oefening 3</h1>
<h4>Emily Ongenaert</h4>
<table class="table table-striped">
    <tbody>
    <tr>
        <th>
            <td>Optellen</td>
            <td><?= $x ?> + <?= $y ?></td>
            <td><?= $x + $y; ?></td>
        </th>
    </tr>
    <tr>
        <th>
            <td>Aftrekken</td>
            <td><?= $x ?> - <?= $y ?></td>
            <td><?= $x - $y; ?></td>
        </th>
    </tr>
    <tr>
        <th>
            <td>Vermenigvuldigen</td>
            <td><?= $x ?> * <?= $y ?></td>
            <td><?= $x * $y; ?></td>
        </th>
    </tr>
    <tr>
        <th>
            <td>Delen</td>
            <td><?= $x ?> / <?= $y ?></td>
            <td><?= $x / $y; ?></td>
        </th>
    </tr>
    <tr>
        <th>
            <td>Rest</td>
            <td><?= $x ?> % <?= $y ?></td>
            <td><?= $x % $y; ?></td>
        </th>
    </tr>
    </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>