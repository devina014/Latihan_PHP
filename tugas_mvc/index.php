<?php
require_once 'controller/BukuController.php';

// Membuat objek controller
$controller = new BukuController();

// Menjalankan fungsi untuk menampilkan daftar buku
$controller->tampilkanBuku();
?>
