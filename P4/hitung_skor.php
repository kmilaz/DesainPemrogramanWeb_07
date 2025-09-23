<?php
$poin = 650;
echo "Total skor pemain adalah: $poin <br>";

$statusHadiah = ($poin > 500) ? 'YA' : 'TIDAK';
echo "Apakah pemain mendapatkan hadiah tambahan? $statusHadiah";

echo "<br>"; 

$poinKedua = 480;

echo "Total skor pemain adalah: $poinKedua <br>";

$statusKedua = ($poinKedua > 500) ? 'YA' : 'TIDAK';
echo "Apakah pemain mendapatkan hadiah tambahan? $statusKedua";
?>