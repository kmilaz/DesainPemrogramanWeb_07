<?php
$a=10;
$b=5;

$hasilTambah = $a+$b;
$hasilKurang = $a-$b;
$hasilKali = $a*$b;
$hasilBagi = $a/$b;
$sisaBagi=$a%$b;
$pangkat=$a**$b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil kurang: {$hasilKurang} <br>";
echo "Hasil kali: {$hasilKali} <br>";
echo "Hasil bagi: {$hasilBagi} <br>";
echo "Sisa bagi: {$sisaBagi} <br>";
echo "Hasil pangkat: {$pangkat} <br>";

$hasilSama = $a===$b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a<$b;
$hasilLebihBesar=$a>$b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil sama: {$hasilSama} <br>";
echo "Hasil tidak sama: {$hasilTidakSama} <br>";
echo "Hasil lebih kecil: {$hasilLebihKecil} <br>";
echo "Hasil lebih besar: {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama: {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama: {$hasilLebihBesarSama} <br>";