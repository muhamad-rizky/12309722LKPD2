<?php
$kalimat = "Selamat Ulang Tahun yang ke-17!";
// preg_match_all() untuk mencari semua simbol yang sesuai dengan pola
// Jika ada! simbol-simbol ini yang ditemukan dalam kalimat, maka fungsi preg_match_all() akan mengembalikan nilai true, dan semua simbol yang cocok akan disimpan dalam array $srt.

if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $kalimat, $srt)) {
    echo "<b>Teks : " . $kalimat. "</b>";
    echo "<br>";
    // echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]); menampilkan semua simbol yang ditemukan dalam kalimat.
    //  implode(', ', $srt[0]) digunakan untuk menggabungkan semua simbol yang ada di array $srt[0] menjadi satu string yang dipisahkan oleh koma.
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);
} else {
    echo "<b>Teks : " . $kalimat . "</b>";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}
?>
