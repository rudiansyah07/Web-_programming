<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'database-php';

$koneksi = mysqli_connect($localhost, $username, $password, $database);

if (!$koneksi) {
	die("koneksi gagal: " . mysqli_connect_error());
} else {
	echo "koneksi berhasil";
}


if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$nik = $_POST['nik'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$telp_wali = $_POST['telp_wali'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$program_akademi = $_POST['program_akademi'];
	$tema_pelatihan = $_POST['tema_pelatihan'];
	$mitra_pelatihan = $_POST['mitra_pelatihan'];

	$result = "INSERT INTO registrasi VALUES ('', '$nama', '$tempat_lahir', 'tanggal_lahir', '$nik', '$email', '$telp', 'telp_wali', '$pekerjaan', '$alamat', '$program_akademi', '$tema_pelatihan', '$mitra_pelatihan')";

	$sql = mysqli_query($koneksi, $result);

	if ($sql) {
		echo "<script>alert('Data berhasil ditambahkan');</script>";
	} else {
		echo "<script>alert('Data gagal ditambahkan');</script>";

	}
	
}

$rows = "SELECT * FROM registrasi";
$row = mysqli_query($koneksi, $rows);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<center><table rder="1" cellpadding="7" cellspacing="0"><tr><td>
	<center><table>
		<tr>
			<td><center>LAPORAN PERTANGGUNGJAWABAN<BR>
			PESERTA PROGRAM PEMBEKAJARAN BANTUAN PEMERINTAH<BR>DIGITALTALENT SCHOLARSHIP TAHUN 2020</center></td>
		</tr>
</table></center><br>
<table border="1" cellpadding="7" cellspacing="0">
		<tr>
			<td><i>Formulir ini untuk diisi (diketik atau ditulis tangan dengan jelas) kemudian diunggah/diapload di akun digitalent.kominfo.go.id oleh <br>peserta masing-masing di <b>awal</b> pelaksanaan pelatihan</i></td>
		</tr>
</table>

<table rder="1" cellpadding="7" cellspacing="0">
	<form action="" method="POST">
		<tr>
			<td>Saya Yang bertandatangan dibawah ini</td>
			<td> : </td>
		</tr>
		<tr>
			<td><label for="nama">Nama Lengkap (Sesuai KTP)</label></td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukan Nama Lengkap" required></td>
		</tr>
		<tr>
			<td><label for="tempat_lahir">Tempat Lahir</label></td>
			<td>:</td>
			<td><input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required></td>
		</tr>
		<tr>
			<td><label for="tanggal_lahir">Tanggal Lahir</label></td>
			<td>:</td>
			<td><input type="date" name= "tanggal_lahir" placeholder="Masukan Tanggal Lahir" required></td>
		</tr>
		<tr>
			<td><label for="nik">NIK/NIP</label></td>
			<td>:</td>
			<td><input type="text" name="nik" placeholder="Masukan Nomor NIK" required></td>
		</tr>
		<tr>
			<td><label for="email">E-Mail Aktif</label></td>
			<td>:</td>
			<td><input type="text" name="email" placeholder="Masukan Alamat E-Mail" required></td>
		<tr>
			<td><label for="telp "><N>No. HP Aktif</N></label></td>
			<td>:</td>
			<td><input type="number" name="telp"  placeholder="Masukan Nomor HP" required></td>
		</tr>
		<tr>
			<td><label for="telp_wali">No HP (Wali/Atasan)</label></td>
			<td>:</td>
			<TD><input type="number" name="telp_wali" placeholder="Masukan Nomor HP Wali" required></td>
		</tr>
		<tr>
			<td><label for="pekerjaan">Pekerjaan</label></td>
			<td>:</TD>
			<td><input type="text" name="pekerjaan" placeholder="Masukan Pekerjaan" required></td>
		</tr>
		<tr>
			<td><label for="alamat">Alamat Domisili</label></td>
			<td>:</td>
			<td><textarea name="alamat" id="alamat" cols="40" rows="5" placeholder="Masukan Alamat Rumah" required></textarea></td>
		</tr>
		<td><label for="program_akademi">Program Akademi</label></td>
			<td>:</td>
			<td><input type="text" name="program_akademi"  placeholder="Masukan Program Akademi"required></td>
		</tr>
		</tr>
		<td><label for="tema">Tema Pelatihan</label></td>
			<td>:</td>
			<td><input type="text" name="tema_pelatihan" placeholder="Masukan Tema Pelatihan" required></td>
		</tr>
		</tr>
		<td><label for="mitra">Mitra Pelatihan<br></label></td>
			<td>:</td>
			<td><input type="text" name="mitra_pelatihan" id="mitra" placeholder="Masukan Mitra Pelatihan"><br></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="submit">Kirim</button> | <button type="button">Batal</button></td>
		</tr>
		
	</table>
</form>

<table border="1" cellpadding="7" cellspacing="0">
	<tr>
		<td>no</td>
		<td>Nama</td>
		<td>Tempat Lahir</td>
		<td>Tgl Lahir</td>
		<td>No. HP</td>
		<td>Email</td>
		<td>Aksi</td>
	</tr>
	<?php $no = 1; ?>
	<?php foreach ($row as $key) : ?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $key['nama']; ?></td>
		<td><?= $key['tempat_lahir']; ?></td>
		<td><?= $key['tanggal_lahir']; ?></td>
		<td><?= $key['telp']; ?></td>
		<td><?= $key['email']; ?></td>
		<td><button>Edit</button> <button>Hapus</button></td>
<?php $no++; ?>
<?php endforeach; ?>
</table></center>


</body>