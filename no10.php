<?php
//3 parameter
function cekJawaban($nama, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;
// untuk menghitung jumlah jawaban benar
    foreach ($jawabanSiswa as $includ => $jawaban) {
        if ($jawaban === $jawabanBenar[$includ]) {
            $jumlahBenar++;
        }
    }

    $jumlahSalah = count($jawabanBenar) - $jumlahBenar;
    echo "Nama : $nama";
    echo "<br>" ;
    echo "Jumlah Jawaban Benar : $jumlahBenar";
    echo "<br>" ;
    echo "Jumlah Jawaban Salah : $jumlahSalah";
}
$namaSiswa = "Putri";
$jawabanSiswa = ['A','B','C','C','A','A','E','C','E','E'];
$jawabanBenar = ['A','D','C','C','B','A','E','B','A','E'];

cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>