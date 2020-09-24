<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Variabel GET</title>
 </head>
 <body>
	<form action="latihan 2.php" metgod="POST">
		nama <input type="text" name="nama"> <br><br>
		golongan<input type="text" name="golongan"> <br><br>
		jam_lembur <input type="text" name="jam_lembur"> <br><br>
		<button type="submit" name="submit">Kirim</button>
	</form>
</body>
 </body>
 </html>

 <?php 

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$golongan = $_POST['golongan'];
	$jam_lembur = $_POST['jam_lembur'];
	echo "Nama".$nama;
	echo "golongan".$golongan;
	echo "Jam Lembur" .$jam_lembur;

}
 ?>