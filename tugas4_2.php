<?php

$saluran = 523;
$pemakaian = 8891;
echo "Jumlah saluran = $saluran <br/>";
echo "Jumlah terpakai = $pemakaian <br/>";

// Rata Rata pemakaian = pemakaian bagi saluran
$average = $pemakaian / $saluran;
echo "Rata-rata Pemakaian = ...?<br/>";
echo "Jawaban : $average liter/keluarga";