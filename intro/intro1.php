<?php
$namasaya = "Mohammad";
$umur = 20;
// tahun sekarang dikurangi variabel umur
$tahun_lahir = date('Y') - $umur;

// tampilkan ke layar
echo "Nama saya $namasaya";
echo "<br>";
echo "Umur saya ".$umur;
echo "<br>";
echo "Tahun kelahiran ".$tahun_lahir;
?>