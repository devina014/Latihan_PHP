<?php
require_once 'model/Buku.php';
require_once 'view/bukuView.php';

class BukuController {
    public function tampilkanBuku() {
        // Buat objek model Buku
        $buku = new Buku();

        // Ambil data dari model
        $dataBuku = $buku->getAllBuku();

        // Kirim data ke view untuk ditampilkan
        tampilkanView($dataBuku);
    }
}
?>
