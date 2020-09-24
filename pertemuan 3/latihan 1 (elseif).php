<?php 
$nama = "ali husain";
$nilai1 = 65;
$nilai2 = 35;
$nilai = ($nilai1 + $nilai2) / 2;


if ($nilai > 85) {
	$grade ="A";
} elseif ($nilai > 75) {
	$grade = "B";
} elseif ($nilai > 65) {
	$grade = "C";
} else {
	$grade = "D";
} 

if ($grade == "A") {
	$ket = "Sangat Baik";
} elseif ($grade == "B") {
	$ket ="Baik";
} elseif ($grade == "C") {
	$ket = "Cukup";
} else {
	$ket = "Kurang";
}
	


echo "Nama : ".$nama;
echo "<br>Nilai : ".$nilai;
echo "<br>grade : ".$grade;
echo "<br>Keterangan : ".$ket;

 ?>