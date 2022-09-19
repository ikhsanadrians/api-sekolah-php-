<?php
$kdkelas = $_GET['kdkelas'];
//Import File Koneksi Database
require_once('../koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM tbl_kelas WHERE kdkelas=$kdkelas;";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus data Kelas';
    }else{
    echo 'Gagal Menghapus data Kelas';
    }
    mysqli_close($con);
    ?>