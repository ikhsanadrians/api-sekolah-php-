<?php
$kdmapel = $_GET['kdmapel'];
//Import File Koneksi Database
require_once('../koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM tbl_mapel WHERE kdmapel=$kdmapel;";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus data Mapel';   
    }else{
    echo 'Gagal Menghapus data Mapel';
    }
    mysqli_close($con);
    ?>