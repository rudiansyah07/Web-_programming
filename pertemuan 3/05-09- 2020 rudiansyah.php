<?php 
$nama = Terserah;
$jamker = 150;
$kerja = 170;
$jamlembur =$kerja - $jamker;
$gol = A ;

switch ($gol) {
	case 'A':
		$upah = 5000;
		break;
	
switch ($gol) {
	case 'B':
		$upah = 6000;
		break;

	switch ($gol) {
	case 'C':
		$upah = 7500;
		break;

	default:
		$upah = 9000;
		break;
}

if ($kerja > 150) {
	$persen = 0.25 * $upah;
	$upahlembur = $upah + $persen;
	$gajilembur = $jamlembur * $upahlembur;
	$gaji = $jamker * $upah;
	$total = $gaji + $gajilembur;
	$gb = $total * 4;
} else {
	$gaji = $jamker * $upah;
	$gb = $total * 4;
	$total = 0;
}

?>