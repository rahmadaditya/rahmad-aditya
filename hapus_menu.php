<?php
include 'koneksi.php';
$id = $_GET['id_menu'];

$query = mysqli_query($conn, "DELETE from tb_menu where id_menu='$id'");

header("location:index.php");
?>