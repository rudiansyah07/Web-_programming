<?php 
include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$agama = $_POST['agama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

$sql = $koneksi->query("UPDATE biodata SET nama = '$nama', agama = '$agama', tgl_lahir = '$tgl_lahir',jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', telepon = '$telepon', email = '$email' WHERE id='$id'");

if (!$sql) {
	header('Location:edit_biodata.php');
}

header('Location:index.php');
 ?>