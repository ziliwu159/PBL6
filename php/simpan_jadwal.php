<?php
include "koneksijadwal.php";
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$matkul = $_POST['matkul'];
$dosen = $_POST['dosen'];
$ruang =$_POST['ruang'];
$input = mysqli_query($koneksijadwal,"INSERT INTO jadwal (hari, jam, matkul, dosen, ruang)
VALUES('$hari','$jam','$matkul','$dosen', '$ruang')") or die(mysqli_error($koneksijadwal)); 
if($input){
        echo "Data Berhasil Disimpan"; 
                header("location:jadwal.php");
}else{
        echo "Gagal Disimpan";
}
?>
