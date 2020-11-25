<?php
include 'koneksi.php';
$peserta = $db->query("select peserta.* from peserta");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title>Pendaftaran Siswa Baru</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Pendaftaran Siswa Baru</h1>
					<div class="row">
						<div class="col-md-12">
							<h1>Daftar Peserta</h1>
								<p>
								<a href="index.php" class="btn btn-primary">Beranda</a>
								<a href="tambah_peserta.php" class="btn btn-primary">Tambah</a>
								<a href="cetak_peserta.php" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</a>
								<a href="cetak_peserta_xls.php" class="btn btn-primary"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak XLS</a>
								</p>
									<table class="table table-hover table-bordered">
										<thead>
											<tr>
											<th class="text-center">No</th>
											<th>Nama Peserta</th>
											<th class="text-center">Tanggal Lahir</th>
											<th class="text-center">JK</th>
											<th>Alamat</th>
											<th>Agama</th>
											<th class="text-center">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1 ?>
											<?php foreach ($peserta as $row) { ?>
											<tr>
											<td class="text-center"><?php echo $no++ ?></td>
											<td><?php echo $row['nama_peserta'] ?></td>
											<td class="text-center"><?php echo $row['tgl_lahir'] ?></td>
											<td class="text-center"><?php echo $row['jk'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
											<td><?php echo $row['alamat'] ?></td>
											<td><?php echo $row['agama'] ?></td>
											<td class="text-center">
											<a href="edit_peserta.php?id_peserta=<?php echo $row['id_peserta']; ?>" class="btn btn-sm btn-warning">Edit</a>
											<a href="delete_peserta.php?id_peserta=<?php echo $row['id_peserta']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</a>
											</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
						</div>
					</div>
				</div>
			</div>
	</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>