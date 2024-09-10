<?php
// label case buat nentuin harinya
$pembayaran = 130000;
$day = date('l');
$diskon1 = 0.07;
$diskon2 = 0.05;
$totalBayar;

if ($day == "Tuesday" && $pembayaran > 100000) {
    $totalBayar = $pembayaran - ($pembayaran * ($diskon1 + $diskon2));
} elseif ($day == "Tuesday") {
    $totalBayar = $pembayaran - ($pembayaran * $diskon2);
} elseif ($pembayaran > 100000) {
    $totalBayar = $pembayaran - ($pembayaran * $diskon1);
} else {
    $totalBayar = $pembayaran;
}

echo "Hari Ini Hari: " . $day;
echo "<br>";
echo "Total Pembelanjaan: Rp. " . number_format($pembayaran, 0, '', '.');
echo "<br>";
echo "Total Pembayaran: Rp. " . number_format($totalBayar, 0, '', '.');
?>