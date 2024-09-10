<?php
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
print_r($uniqueJurusan);
?>

<!-- strtoupper untuk mengubah huruf jadi kapital -->
 <!-- array_unique menghapus dan menghilangkan duplikasi  -->
  <!-- array map menerapkan untuk stroupper map -->