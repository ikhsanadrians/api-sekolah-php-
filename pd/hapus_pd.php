<?php
$nis = $_GET['nis'];
//Import File Koneksi Database
require_once('../koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM tbl_siswa WHERE nis=$nis;";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus data siswa';
    }else{
    echo 'Gagal Menghapus data siswa';
    }
    mysqli_close($con);
    ?>