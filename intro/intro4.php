<?php
$nilai = 80; // variabel nilai (tipe data integer)
$spp = true; // variable spp tipe data boolean
$kkm = 75;
// jika nilai lebih dari sama dengan kkm dan spp true
if($nilai >= $kkm && $spp == true) {
    echo "Lulus";
} else { // jika tidak memenuhi kondisi diatas
    echo "Tidak lulus";
}

echo "<br>-----------<br>";

// deklarasikan variable kelas tipe data string (karakter)
$kelas = "b";
if($kelas == "A") {
    echo "Masuk Ruang 1";
// jika kelas B atau b
} else if($kelas == "B" || $kelas == "b") {
    echo "Masuk Ruang 2";
} else if($kelas == "C") {
    echo "Masuk Ruang 3";
} else {
    echo "Tidak punya ruang";
}
?>