<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh pemanggilan
$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

// 2. Tampilkan Tanggal, Bulan, dan Tahun sekarang dengan getdate()
$hari_ini = getdate();
echo "Tanggal sekarang (pakai getdate) : " . $hari_ini['mday'] . "-" . $hari_ini['mon'] . "-" . $hari_ini['year'];
echo "<br><br>";

// 3. Tampilkan Tanggal, Bulan, dan Tahun sekarang dengan date('d-F-Y')
echo "Tanggal sekarang (pakai date) : " . date("d-F-Y");
?>
