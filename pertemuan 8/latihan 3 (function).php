<?php 
function profil() {
	echo 'Rudiansyah';
	echo '<br>Manajemen Informatika & Komputer';
	echo '<br>082259633721';
	echo '<br>rudi.eltibiz07@gmail.com';
	echo '<hr>';
}

profil();
profil();
profil();

echo "<br>=============================================================================================================<br>";


function identitas($nama) {

echo 'Nama Saya Adalah : ' .$nama. '<br>';
	return $nama;
}


identitas('Rudiansyah');
identitas('Udin Djancuk');


echo "<br>=============================================================================================================<br>";

function usia($thn_lahir, $thn_skg) {
	$umur = $thn_skg - $thn_lahir;
	echo "Umur Saya :".$umur.' Tahun<br>';
	return $umur;
}
usia(2001, 2020);
usia(2010, 2020);


echo "<br>=============================================================================================================<br>";

function hitung($p, $l) {
	$luas = $p * $l;
	echo $p * $l.' X ' .$l. ' = ' .$luas. '<br>';
	return $luas;
}

hitung(10, 5)


 ?>