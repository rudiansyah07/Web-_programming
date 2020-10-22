<?php 
$conn = mysqli_connect("localhost", "root", "", "db_data");
$result =mysqli_query ($conn, "SELECT*FROM transaksi"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<h3>Tambah data</h3>
	<form action="" method="POST">



		<label for="nama">Nama Nasabah</label>
		<input type="text" id="nama" name="nama" required>
		<br><br>


		<label for="norek">Nomor Rekening</label>
		<input type="text" id="norek" name="norek" required>
		<br><br>


		<label for="no">Nomor Transaksi</label>
		<input type="text" id="no" name="no" required>
		<br><br>

		<label for="jenis">Jenis Transaksi</label>
		<textarea name="jenis" id="" cols="30" rows="3" id="jenis"></textarea>
		<br><br>

		<label for="tgl">Tanggal</label>
		<input type="text" id="tgl" name="tgl" required>
		<br><br>

		<label for="jumlah">Jumlah</label>
		<input type="text" id="jumlah" name="jumlah" required>
		<br><br>
		<button type="submit" name="submit">Simpan</button>
	</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$norek = $_POST['norek'];
	$no = $_POST['no'];
	$jenis = $_POST['jenis'];
	$tgl = $_POST['tgl'];
	$jumlah = $_POST['jumlah'];

$sql = "INSERT into mahasiswa VALUES ('', '$nama', '$norek', '$jurusan', '$jenis', '$tgl', '$jumlah', '', '')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "Data Berhasil Disimpan!";
		header('Location: mahasiswa.php');
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>




