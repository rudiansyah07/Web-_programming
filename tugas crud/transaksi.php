<?php 
include 'koneksi.php';
$result =mysqli_query ($conn, "SELECT*FROM transaksi"); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<h3></h3><br>
	<a href="tambah_data.php" class="btn btn-xs btn-info">Tambah Data</a> <br><br>
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
		<?php $no=1; ?>
		<?php foreach ($result as $row): ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?php echo $row['nama_nasabah'];?></td>
			<td><?php echo $row['no_rekening'];?></td>
			<td><?php echo $row['no_transaksi'];?></td>
			<td><?php echo $row['jenis_transaksi'];?></td>
			<td><?php echo $row['tanggal'];?></td>
			<td><?php echo $row['jumlah'];?></td>
			<td><a href="edit.php?id=<?= $row['id'] ?>"><button class="btn btn-xs btn-info">Edit</button></a> | <a href="hapus.php?id=<?= $row['id'] ?>"><button class="btn btn-xs btn-danger" onclick="tombol()">Hapus</button></a></td>
			
		</tr>
		<?php endforeach ?>
	</TABLE>
	       <script>
                 function tombol() {
                    var yakin = confirm("Apakah kamu yakin ingin menghapus?");
                     if (yakin) {
                          window.location = "hapus.php?id=<?= $row['id']; ?>";
                     } else {
                          window.location= "transaksi.php"
                              
                       }
                    }
                     </script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

