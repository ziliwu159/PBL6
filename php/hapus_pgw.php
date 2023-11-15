<?php
include "koneksipgw.php";
// include database connection file include 'koneksipgw.php';
$nik = $_GET['nik'];
$result = mysqli_query($koneksipgw, "DELETE FROM pegawai WHERE nik='$nik'"); header("Location:indexpgw.php");
?>
