<?php 
$nama = "Udin";
$tugas = 50;
$uts = 50;
$uas = 50;
$nilai = ($tugas*0.2)+($uts*0.3)+($uas*0.5);

switch (true) {
 	case ($nilai>65) :
 		$ket = "lulus";
 		break;
 	
 	default:
 		$ket = "tidak lulus";
 		break;
 } 

 switch (true) {
 	case ($nilai>85) :
 		$grede ='A';
 		break;

 	case ($nilai>75) :
 		$grede ='B';
 		break;
 	
 	case ($nilai>65) :
 		$grede ='C';
 		break;

 	default:
 		$grade = 'D';
 		break;
 }

echo "Nama : ".$nama;
echo "<br>Nilai : ".$nilai;
echo "<br>Grade : ".$grade;
echo "<br>Keterangan : ".$ket;


 ?>