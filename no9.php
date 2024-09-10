<?php
function jenisKoin($jumlahKoin){
    $koin = [1000,500,200,]; 
    $hasil = [];
// [] itu di gunakan untuk menyimpan hasil koin yang di pilih $hasil[] = $k di tugaskan untuk menambahkan koin ke hasil
    foreach($koin as $k) {
        // looping pecahan koin dari terbesar (1000 sampe kecil 200)
        if($jumlahKoin >= $k) {
            // cek koin masi lebi besar atau sama dengan pecahan saat itu
            $hasil[] = $k;
            $jumlahKoin -= intdiv($jumlahKoin, $k) * $k;
            // -= intdiv itu buat ngurangi jumlah koin sesuai ama pecahan nya

        }
    }

    return $hasil;
}
// panggilan fungsi dan cek hasil
$jumlahKoin = 1750;
$jenisKoin = jenisKoin($jumlahKoin);

echo "jenis koin untuk Rp. $jumlahKoin";
foreach($jenisKoin as $nilai) {
    echo"<ul><li> Rp. $nilai </li></ul>";
}

?>