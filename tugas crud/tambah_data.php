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



		<label for="nama_nasbah">nama Nasabah</label>
		<input type="text" id="nama_nasbah" name="nama_nasbah" required>
		<br><br>


		<label for="no_rekening">Nomor Rekening</label>
		<input type="text" id="no_rekening" name="no_rekening" required>
		<br><br>


		<label for="no_transaksi">nomor Transaksi</label>
		<input type="text" id="no_transaksi" name="no_transaksi" required>
		<br><br>

		<label for="jenis_transaksi">jenis_transaksi</label>
		<textarea name="jenis_transaksi" id="" cols="30" rows="3" id="jenis_transaksi"></textarea>
		<br><br>

		<label for="tanggal">Tanggal</label>
		<input type="date" id="tanggal" name="tanggal" required>
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
	$nama_nasbah = $_POST['nama_nasbah'];
	$no_rekening = $_POST['no_rekening'];
	$no_transaksi = $_POST['no_transaksi'];
	$jenis_transaksi = $_POST['jenis_transaksi'];
	$tanggal = $_POST['tanggal'];
	$jumlah = $_POST['jumlah'];

$sql = "INSERT into transaksi VALUES ('', '$nama_nasbah', '$no_rekening','$no_transaksi', '$jenis_transaksi', '$tanggal', '$jumlah', '', '')";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "Data Berhasil Disimpan!";
		header('Location: transaksi.php');
	} else {
		echo "Data Gagal Disimpan!";
	}

}

 ?>




