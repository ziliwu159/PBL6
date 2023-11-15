<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akademik"; //Nama Database
// melakukan koneksi ke db
$koneksidsn = mysqli_connect($host, $user, $pass, $db); 
if(!$koneksidsn){
    echo "Gagal connect: " . die(mysqli_error($koneksidsn)); 
}
?>