<?php
include "koneksidsn.php";
// include database connection file include 'koneksi.php';
$nidn = $_GET['nidn'];
$result = mysqli_query($koneksidsn, "DELETE FROM dosen WHERE nidn='$nidn'"); header("Location:indexdsn.php");
?>
