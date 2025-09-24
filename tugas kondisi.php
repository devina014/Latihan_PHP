<?php
echo "<h2 style='color:pink;'>🌸 Contoh Percabangan PHP 🌸</h2>";

// 1) Login sederhana
$username = "devina";
$password = "12345";

echo "<h3>1) Login Sederhana</h3>";
if ($username == "devina" && $password == "12345") {
    echo "✅ Login berhasil, selamat datang <b>$username</b> 💕";
} else {
    echo "❌ Login gagal, coba lagi ya! 😿";
}

echo "<hr>";

// 2) Cek nilai mahasiswa
$nilai = 100;
echo "<h3>2) Cek Nilai Mahasiswa</h3>";
if ($nilai >= 85) {
    echo "Nilai kamu A 🏆";
} elseif ($nilai >= 70) {
    echo "Nilai kamu B 👍";
} elseif ($nilai >= 55) {
    echo "Nilai kamu C 🙂";
} else {
    echo "Nilai kamu D 😿";
}

echo "<hr>";

// 3) Cek umur pengguna
$umur = 17;
echo "<h3>3) Cek Umur Pengguna</h3>";
if ($umur < 12) {
    echo "Kamu masih anak-anak 🧒";
} elseif ($umur < 18) {
    echo "Kamu remaja 🌱";
} else {
    echo "Kamu sudah dewasa 💼";
}

echo "<hr>";

// 4) Pilihan menu makanan dengan switch
$menu = 2;
echo "<h3>4) Pilihan Menu Makanan</h3>";
switch ($menu) {
    case 1:
        echo "Kamu pilih 🍔 Burger";
        break;
    case 2:
        echo "Kamu pilih 🍕 Pizza";
        break;
    case 3:
        echo "Kamu pilih 🍜 Ramen";
        break;
    default:
        echo "Menu tidak tersedia 😿";
        break;
}

echo "<hr>";

// 5) Cek bilangan genap/ganjil
$angka = 15;
echo "<h3>5) Cek Bilangan Genap/Ganjil</h3>";
if ($angka % 2 == 0) {
    echo "Angka $angka adalah bilangan Genap ✨";
} else {
    echo "Angka $angka adalah bilangan Ganjil 🌟";
}
?>
``
