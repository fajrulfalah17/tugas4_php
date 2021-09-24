<?php

$beli = 8000;
$jual = 7500;
$untung = 300;

// penyelesaian
$mutlak = ($beli - $jual)/$untung;
// pembulatan
$bulat = ceil($mutlak);

echo "Harga Beli = Rp. $beli<br/>";
echo "Harga Jual = Rp. $jual<br/>";
echo "Keuntungan = Rp. $untung<br/>";
echo "Berapa jumlah kambing yg dibeli? <br/> Jawaban = $bulat ekor";
