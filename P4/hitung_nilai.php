<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);

$totalNilai = 0;
foreach ($nilai as $nilaiUjian){
    $totalNilai+=$nilaiUjian;
}

echo "Total nilai sebelum dikurangi: $totalNilai <br>";

$nilaiTerendah1=$nilai[0];
$nilaiTerendah2=$nilai[1];

$jumlahSiswa=count($nilai);
$nilaiTertinggi1=$nilai[$jumlahSiswa-1];
$nilaiTertinggi2=$nilai[$jumlahSiswa-2];

echo "Nilai yang diabaikan: $nilaiTerendah1, $nilaiTerendah2, $nilaiTertinggi2, dan $nilaiTertinggi1<br>";

$totalAkhir=$totalNilai-$nilaiTerendah1-$nilaiTerendah2-$nilaiTertinggi1-$nilaiTertinggi2;

echo "Total nilai yang akan digunakan adalah: $totalAkhir <br>";

$rataRata=$totalAkhir/($jumlahSiswa-4);
echo "Rata-rata nilai setelah mengabaikan nilai terendah dan tertinggi adalah $rataRata";
?>