<?php
$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi-$kursiDitempati;
$persenKursiKosong = ($kursiKosong/$totalKursi)*100;

echo "Total kursi= {$totalKursi} kursi<br>";
echo "Kursi yang ditempati= {$kursiDitempati} kursi<br>";
echo "Kursi yang masih kosong sebanyak {$persenKursiKosong}%";
?>