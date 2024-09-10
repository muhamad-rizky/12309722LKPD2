<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka = 90;
    $dibagi = [1, 2, 3, 5, 6, 9, 10, 15, 18,30];
    foreach ($dibagi as $d2) {
            $hasil = $angka/$d2;
            echo "$angka : $d2 = $hasil<br>";
    }
    ?>