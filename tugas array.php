<!DOCTYPE html>
<html>
<head>
    <title>✨ Penjumlahan Matriks Lucu 3x3 ✨</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: linear-gradient(135deg, #FFD3A5, #FD6585);
            color: #333;
            text-align: center;
            padding: 40px;
        }
        h1 {
            color: #fff;
            text-shadow: 2px 2px #ff80ab;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        table {
            border-collapse: collapse;
            margin: 10px;
            background-color: #fffaf0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            animation: pop 0.7s ease-in-out;
        }
        td {
            border: 2px dashed #ffb6c1;
            padding: 15px 25px;
            font-size: 18px;
            color: #333;
        }
        h2 {
            color: #fff;
            text-shadow: 1px 1px 4px #000;
        }
        .symbol {
            font-size: 40px;
            color: white;
            margin-top: 60px;
        }
        @keyframes pop {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        footer {
            margin-top: 40px;
            font-size: 14px;
            color: #fff;
            text-shadow: 1px 1px #000;
        }
    </style>
</head>
<body>

<h1>🍭 Penjumlahan Matriks 3x3 🍭</h1>
<p><b>“Karena angka juga butuh cinta dan warna~ 💕”</b></p>

<?php
// Matriks A
$A = [
    [1, 1, 1],
    [3, 3, 3],
    [2, 2, 2]
];

// Matriks B
$B = [
    [2, 2, 2],
    [3, 3, 3],
    [1, 1, 1]
];

// Matriks hasil
$C = [];

// Loop penjumlahan
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Fungsi tampil matriks
function tampilMatriks($M) {
    echo "<table>";
    foreach ($M as $row) {
        echo "<tr>";
        foreach ($row as $val) {
            echo "<td>$val</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Tampilan hasil
echo "<div class='container'>";
echo "<div><h2>🍬 Matriks A</h2>";
tampilMatriks($A);
echo "</div>";

echo "<div class='symbol'>➕</div>";

echo "<div><h2>🍫 Matriks B</h2>";
tampilMatriks($B);
echo "</div>";

echo "<div class='symbol'>✨</div>";

echo "<div><h2>🍰 Hasil (A + B)</h2>";
tampilMatriks($C);
echo "</div>";
echo "</div>";
?>

<footer>
    Dibuat dengan rasa penuh cinta 💖!
</footer>

</body>
</html>
