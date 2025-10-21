<?php
class Buku {
    // Data buku disimpan dalam array
    private $dataBuku = [
        ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
        ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
        ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
    ];

    // Fungsi untuk mengambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
