<?php
include "koneksijadwal.php";

// include database connection file include 'koneksidsn.php';
$hari= $_POST['hari'];
$jam=$_POST['jam'];
$matkul=$_POST['matkul'];
$dosen=$_POST['dosen'];
$ruang=$_POST['ruang'];
$result = mysqli_query($koneksijadwal, "UPDATE jadwal SET hari='$hari',jam='$jam',matkul='$matkul',dosen='$dosen',ruang='$ruang' WHERE hari='$hari'");
// Redirect to homepage to display updated user in list 
header("Location: jadwal.php");
?>
