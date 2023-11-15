<?php
include "koneksidsn.php";
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$input = mysqli_query($koneksidsn,"INSERT INTO dosen (nidn, nama, alamat, jabatan)
VALUES('$nidn','$nama','$alamat','$jabatan')") or die(mysqli_error($koneksidsn)); 
if($input){
        echo "Data Berhasil Disimpan"; 
                header("location:indexdsn.php");
}else{
        echo "Gagal Disimpan";
}
?>
