<?php
include "koneksipgw.php";

// include database connection file include 'koneksidsn.php';
$nik= $_POST['nik'];
$nama=$_POST['nama'];
$bagian =$_POST['bagian'];
$result = mysqli_query($koneksipgw, "UPDATE pegawai SET nama='$nama',bagian='$bagian' WHERE nik='$nik'");
// Redirect to homepage to display updated user in list 
header("Location: indexpgw.php");
?>
