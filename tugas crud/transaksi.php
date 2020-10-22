

<?php 
$conn = mysqli_connect("localhost", "root", "", "db_data");
$result =mysqli_query ($conn, "SELECT*FROM transaksi"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3></h3>
	<a href="tambah_data.php">Tambah Data</a>
	<TABLE border="1" cellpandding="7" cellspacing="0">
		<tr>
			<TH>ID Nasabah</TH>
			<TH>Nama Nasabah</TH>
			<TH>No Rekening</TH>
			<TH>No Transaksi</TH>
			<TH>Jenis Transaksi</TH>
			<TH>Tanggal</TH>
			<TH>Jumlah</TH>
			<TH>Aksi</TH>
		</tr>
		<?php foreach ($result as $row): ?>
		<tr>
			<td><?php echo $row['id_nasabah'];?></td>
			<td><?php echo $row['nama_nasabah'];?></td>
			<td><?php echo $row['no_rekening'];?></td>
			<td><?php echo $row['no_transaksi'];?></td>
			<td><?php echo $row['jenis_transaksi'];?></td>
			<td><?php echo $row['tanggal'];?></td>
			<td><?php echo $row['jumlah'];?></td>
			<td><a href="edit.php?id=<?= $row['id'] ?>"><button>Edit</button></a> | <a href="hapus.php?id=<?= $row['id'] ?>"><button>Hapus</button></a></td>
			
		</tr>
		<?php endforeach ?>
	</TABLE>
</body>
</html>