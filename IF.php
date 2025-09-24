<?php
$x = 10;

if ($x > 5) echo "Selamat kamu lulus";
?>

<?php
if (TRUE)
echo "Selamat atas wisudamu Devina, di Politeknik Negeri Jember...";
?>

<?php
if (5 > 2) {
    echo "Selamat ya atas kelulusannya<br>";
    echo "Selamat ya vina <br>";
}
?>

<?php
$nilai = 80;
$umur = 20;

if ($nilai >= 75) {
    echo "Lulus<br>";
    echo "Selamat ya!";
}

if ($umur >= 18) {
    echo "<br>kamu sudah dewasa<br>";
    echo "Boleh membawa mobil kalo kamu pergi kemana mana";
}
?>
<br>
<?php
$nama="vina";
if ($nama=="devina")
echo "Selamat Datang vina";
else
echo "Selamat Datang di Politeknik Negeri Jember";
?>
<br>
<?php
$nilai = 98;

if ($nilai >= 75)
    echo "Lulus";
else
    echo "Tidak Lulus";
?>

<?php
$nilai = 100;

if ($nilai >= 75) {
    echo "Lulus<br>";
    echo "Selamat ya!";
} else {
    echo "Tidak lulus<br>";
    echo "Coba lagi tahun depan.";
}
?>
<br>
<?php
$nilai = 80;

if ($nilai >= 75):
    echo "Lulus<br>";
    echo "Selamat ya!";
else:
    echo "Tidak lulus<br>";
endif;
?>

