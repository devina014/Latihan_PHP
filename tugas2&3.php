<?php
// =============================================
// TUGAS PEMROGRAMAN PHP
// =============================================

// -----------------------------
// 1. Tanda " " pada nilai variabel biasanya menandakan sebuah string,
//    tetapi pada saat dilakukan operasi penjumlahan ternyata menghasilkan nilai jumlah.
//    Jawaban: Karena PHP melakukan type juggling, yaitu otomatis mengubah string angka menjadi number
// -----------------------------

echo "<h3>Jawaban No. 1</h3>";
$a = "10"; // string
$b = "5";  // string
$hasil = $a + $b; // PHP otomatis ubah jadi number
echo "String '10' + String '5' = $hasil <br>";
echo "Penjelasan: PHP mengkonversi string numerik menjadi number saat operasi aritmatika.<br><br>";


// -----------------------------
// 2. Apa yang membedakan pembagian dengan operator / dan operator modulo % ?
//    Jawaban: / menghasilkan hasil bagi, % menghasilkan sisa bagi
// -----------------------------

echo "<h3>Jawaban No. 2</h3>";
$bil1 = 10;
$bil2 = 3;
echo "Pembagian dengan / : 10 / 3 = " . ($bil1 / $bil2) . "<br>";
echo "Modulo dengan % : 10 % 3 = " . ($bil1 % $bil2) . "<br>";
echo "Penjelasan: Operator / menghasilkan hasil pembagian (bisa pecahan), sedangkan % menghasilkan sisa bagi.<br><br>";


// -----------------------------
// 3. Tambahkan kode program operator agar bisa menghasilkan nilai gabungan
//    string tugas1 dan tugas2 menjadi 9080
// -----------------------------

echo "<h3>Jawaban No. 3</h3>";
$tugas1 = "90";
$tugas2 = "80";
echo "Menggunakan operator titik (.) untuk menggabungkan string: <br>";
echo $tugas1 . $tugas2; // hasilnya 9080
echo "<br><br>";


// -----------------------------
// Contoh kode string dari soal
// -----------------------------

echo "<h3>Contoh Kode String</h3>";

$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";
?>