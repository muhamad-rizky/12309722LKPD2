<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function menampilKarakter($text)
    {
        // strlen untuk menentukan panjang string
        // substr untuk memotong bgian dri sbuah string 
        $panjangKalimat = strlen($text);

        if ($panjangKalimat > 50) {
            $text = substr($text, 0, 20) . "..........";
        }

        return $text;
    }

    $text = "Kita di wajibkan makan setiap hari sebanyak 3x maksimal dan istirahat cukup agar tubuh kita tetap segar dan tidak di perbolehkan untuk bergadang karna mengakibatkan penyakit otak,
    ";
    $hasil = menampilKarakter($text);
    echo $hasil;
    ?>
</body>

</html>