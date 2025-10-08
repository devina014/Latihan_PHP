<?php
$siswa = [
    ["Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90],
    ["Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88],
    ["Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95]
];

// Cetak nilai Bahasa siswa ke-2
echo "Nilai Bahasa siswa ke-2: " . $siswa[1]["Bahasa"] . "<br><br>";

// Cetak semua data
echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr>
    <th>Nama</th>
    <th>Nilai Matematika</th>
    <th>Nilai Bahasa</th>
</tr>";

foreach ($siswa as $data) {
    echo "<tr>
        <td>{$data['Nama']}</td>
        <td>{$data['Matematika']}</td>
        <td>{$data['Bahasa']}</td>
    </tr>";
}
echo "</table>";
?>


<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga
$total = 0;
foreach ($buah as $item) {
    $total += $item[1] * $item[2];
}

echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr>
    <th>Nama Buah</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Total (Harga × Stok)</th>
</tr>";

foreach ($buah as $item) {
    $subtotal = $item[1] * $item[2];
    echo "<tr>
        <td>$item[0]</td>
        <td>$item[1]</td>
        <td>$item[2]</td>
        <td>$subtotal</td>
    </tr>";
}

echo "<tr><th colspan='3'>Total Semua</th><th>$total</th></tr>";
echo "</table>";
?>

<br/>

<?php
$produk = [
    ["nama" => "Laptop X", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.7],
    ["nama" => "Headphone Z", "kategori" => "Aksesoris", "harga" => 250000, "rating" => 4.5],
    ["nama" => "Smartphone Y", "kategori" => "Elektronik", "harga" => 4500000, "rating" => 4.8]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "<table border='1' cellpadding='5' cellspacing='0'>
<tr>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Rating</th>
</tr>";

foreach ($produk as $p) {
    echo "<tr>
        <td>{$p['nama']}</td>
        <td>{$p['kategori']}</td>
        <td>{$p['harga']}</td>
        <td>{$p['rating']}</td>
    </tr>";
}
echo "</table><br>";

echo "Produk dengan harga tertinggi: <b>{$tertinggi['nama']}</b> (Rp{$tertinggi['harga']})";
?>

<br/>

<?php
$angka = [
    [2, 7, 3],
    [5, 9, 1],
    [8, 4, 6]
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
$total = 0;
foreach ($angka as $baris) {
    echo "<tr>";
    foreach ($baris as $nilai) {
        echo "<td align='center'>$nilai</td>";
        $total += $nilai;
    }
    echo "</tr>";
}
echo "</table><br>";

echo "Jumlah total semua elemen = <b>$total</b>";
?>
