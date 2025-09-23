<?php
$nilai_siswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

$total_nilai = array_sum($nilai_siswa);
$jumlah_siswa = count($nilai_siswa);

$rata_rata = $total_nilai / $jumlah_siswa;

echo "Nilai rata-rata kelas adalah: $rata_rata <br>";

echo "<br>Daftar Siswa dengan Nilai di Atas Rata-Rata:<br>";

foreach ($nilai_siswa as $nama => $nilai) {
    if ($nilai > $rata_rata) {
        echo $nama . " - Nilai: " . $nilai . "<br>";
    }
}
?>