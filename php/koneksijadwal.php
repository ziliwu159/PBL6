<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akademik"; //Nama Database
// melakukan koneksi ke db
$koneksijadwal = mysqli_connect($host, $user, $pass, $db); 
if(!$koneksijadwal){
    echo "Gagal connect: " . die(mysqli_error($koneksijadwal)); 
}
?>