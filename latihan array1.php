<?php
$nama0="Vina";
$nama1="Andin";
$nama2="Rafly";
$nama3="Anin";
$nama4="Boby";
//... dst sampai $nama10
?>

$nama_variabel = array(
key => value,
key2 => value2,
key3 => value3,
...)

<?php
//pembuatan array
$nama = array(
1=>"Vina",
2=>"Nindi",
3=>"Sukma",
4=>"Rina",
5=>"Sari");
//cara akses array
echo "<br />";
echo $nama[1]; //Vina 
echo "<br />";
echo $nama[2]; //Nindi
echo "<br />";
echo $nama[5]; //gtw
echo "<br />";
?>

<?php
// pembuatan array
$nama = array("Vina","Nanda","Sukma","Rina","Sari");
// pengaksesan array
echo $nama[2]; //Nanda
 echo "<br />";
echo $nama[3]; //Sukma
 echo "<br />";
echo $nama[4]; //Rina
?>

<?php
// pembuatan array
$coba = array (2=>"Andri", "dua"=>"2",
'tiga'=>3,
true=>true,
9=>"sembilan",);
// pengaksesan array echo
$coba[2]; //Andri
echo "<br />";
echo $coba["dua"]; //2
echo "<br />";
echo $coba['tiga']; //3
echo "<br />";
echo $coba[true]; //1 (true di konversi menjadi 1)
echo "<br />";
echo $coba[9]; // 9
?>

<?php
// pembuatan array
$nama = ["Vina","Indah","Sukma","Rina","Sari"];
// pengaksesan array
echo $nama[1]; //Vina 
echo "<br />";
echo $nama[2]; //Sukma 
echo "<br />";
echo $nama[3]; //Rina
?>