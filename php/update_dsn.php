<?php
include "koneksidsn.php";

// include database connection file include 'koneksidsn.php';
$nidn= $_POST['nidn'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];
$result = mysqli_query($koneksidsn, "UPDATE dosen SET nama='$nama',alamat='$alamat',jabatan='$jabatan' WHERE nidn='$nidn'");
// Redirect to homepage to display updated user in list 
header("Location: indexdsn.php");
?>
