<?php
$hargaProduk=120000;
$diskon=20;
$syaratDiskon=100000;

echo "Harga produk: Rp $hargaProduk<br>";
if ($hargaProduk>$syaratDiskon) {
    $potonganHarga=$hargaProduk*($diskon/100);
    $hargaAkhir=$hargaProduk-$potonganHarga;

    echo "Pelanggan berhak mendapatkan diskon!<br>";
    echo "Besar potongan harga: Rp $potonganHarga <br>";
} else {
    echo "Pembelian tidak memenuhi syarat untuk diskon.<br>";
}
echo "Harga yang harus dibayar: Rp $hargaAkhir";
?>