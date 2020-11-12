<?php 
include 'koneksi.php';

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$agama = $_POST['agama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];


$nama = $nama_depan.''.$nama_belakang;

$sql = $koneksi->query("INSERT INTO biodata VALUES ('', '$nama', '$tgl_lahir', '$agama', '$jenis_kelamin', '$alamat', '$telepon', '$email')");

header('location:index.php');
 ?>