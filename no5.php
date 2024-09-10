<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // inisialisasi 2 array
    $bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

    // menggabungkan
    $combined = array_merge($bill1, $bill2);
    // menghapus elemen duplikat jadi kaya misalkan di dalam array itu ada angka yang sama tetapi di hasil akan tetap 1 yang muncul
    $unique = array_unique($combined);
    // rsort itu untuk mengurutkan dari yang besar ke yang kecil
    rsort($unique);
// menggabungkan semua elemen dari array menjadi 1 string dan setiap elemen dipisah oleh koma atau spasi
    $otput = "Hasil : " . implode(", ", $unique);
    //
    echo $otput;
    ?>

</body>

</html>