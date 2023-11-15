<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akademik"; //Nama Database
// melakukan koneksi ke db
$koneksipgw = mysqli_connect($host, $user, $pass, $db); 
if(!$koneksipgw){
    echo "Gagal connect: " . die(mysqli_error($koneksipgw)); 
}
?>