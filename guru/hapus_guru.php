<?php
$kdguru = $_GET['kdguru'];
//Import File Koneksi Database
require_once('../koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM tbl_guru WHERE kdguru=$kdguru;";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus data Guru';
    }else{
    echo 'Gagal Menghapus data Guru';
    }
    mysqli_close($con);
    ?>