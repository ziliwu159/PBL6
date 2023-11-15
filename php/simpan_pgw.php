<?php
include "koneksipgw.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$bagian = $_POST['bagian'];
$input = mysqli_query($koneksipgw,"INSERT INTO pegawai (nik, nama, bagian)
VALUES('$nik','$nama','$bagian')") or die(mysqli_error($koneksipgw)); 
if($input){
        echo "Data Berhasil Disimpan"; 
                header("location:indexpgw.php");
}else{
        echo "Gagal Disimpan";
}
?>
