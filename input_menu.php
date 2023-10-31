<?php
include 'koneksi.php';
$id = $_POST['id_menu'];
$nama = $_POST['nama_menu'];
$jenis = $_POST['jenis_menu'];
$harga = $_POST['harga'];

$query = mysqli_query($conn, "INSERT into tb_menu values('$id','$nama','$jenis','$harga')");

header("location:index.php");
?>