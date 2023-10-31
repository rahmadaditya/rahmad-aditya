<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE from prodi where id='$id'");

header("location:admin.php");
?>

























