<?php
include "jadwal.php";
// include database connection file include 'koneksipgw.php';
$hari = $_GET['hari'];
$result = mysqli_query($koneksijadwal, "DELETE FROM jadwal WHERE hari='$hari'"); header("Location:jadwal.php");
?>
