<?php
function tampilkanView($dataBuku) {
    echo "<h2 style='font-family:Arial;'>Daftar Buku Perpustakaan</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; font-family:Arial;'>";
    echo "<tr style='background:#f2f2f2;'>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
          </tr>";

    $no = 1;
    foreach ($dataBuku as $b) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$b['judul']}</td>
                <td>{$b['pengarang']}</td>
                <td>{$b['tahun']}</td>
              </tr>";
        $no++;
    }

    echo "</table>";
}
?>
