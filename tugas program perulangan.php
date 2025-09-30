<?php
// ===============================================
// TUGAS 1
// Program perulangan dari 100 sampai 1000
// Dalam bentuk tabel horizontal & berwarna
// ===============================================
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 1 - Perulangan Horizontal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fffafc;
            text-align: center;
        }
        h2 {
            color: #d63384;
            background: #ffe6f0;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 95%;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #ffb3d9;
            padding: 6px;
            text-align: center;
            min-width: 40px;
        }
        th {
            background: #ff66b2;
            color: white;
        }
        .genap {
            background: #c3f7c3; /* hijau muda */
            font-weight: bold;
        }
        .ganjil {
            background: #fddde6; /* pink muda */
        }
    </style>
</head>
<body>

<h2>Perulangan Angka dari 100 sampai 1000</h2>

<table>
    <tr>
    <?php
    $count = 0;
    for ($i = 100; $i <= 1000; $i++) {
        $kelas = ($i % 2 == 0) ? "genap" : "ganjil";
        echo "<td class='$kelas'>$i</td>";
        $count++;

        // Biar tabel tidak terlalu panjang, ganti baris setiap 20 angka
        if ($count % 20 == 0) {
            echo "</tr><tr>";
        }
    }
    ?>
    </tr>
</table>

</body>
</html>

<?php
// ===============================================
// TUGAS 2
// Perulangan nilai 0-100 dengan Grade
// Ditampilkan dalam tabel horizontal & berwarna
// ===============================================
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2 - Grade Nilai Horizontal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fffafc;
            text-align: center;
        }
        h2 {
            color: #d63384;
            background: #ffe6f0;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 95%;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
        }
        th, td {
            border: 1px solid #ffb3d9;
            padding: 6px;
            text-align: center;
            min-width: 45px;
        }
        th {
            background: #ff66b2;
            color: white;
        }
        .A { background: #4caf50; color: white; font-weight: bold; }   /* hijau */
        .B { background: #2196f3; color: white; font-weight: bold; }   /* biru */
        .C { background: #ffc107; color: black; font-weight: bold; }   /* kuning */
        .D { background: #ff9800; color: white; font-weight: bold; }   /* oranye */
        .E { background: #f44336; color: white; font-weight: bold; }   /* merah */
    </style>
</head>
<body>

<h2>Grade Nilai (0 - 100)</h2>

<table>
    <tr>
    <?php
    $count = 0;
    for ($nilai = 0; $nilai <= 100; $nilai++) {
        // Tentukan grade
        if ($nilai <= 40) {
            $grade = "E";
        } elseif ($nilai <= 50) {
            $grade = "D";
        } elseif ($nilai <= 60) {
            $grade = "C";
        } elseif ($nilai <= 79) {
            $grade = "B";
        } else {
            $grade = "A";
        }

         // Cetak tabel per kolom
        echo "<td class='$grade'>$nilai<br>$grade</td>";
        $count++;

        // Ganti baris setiap 15 nilai biar rapi
        if ($count % 15 == 0) {
            echo "</tr><tr>";
        }
    }
    ?>
    </tr>
</table>

</body>
</html>
