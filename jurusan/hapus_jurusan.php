<?php
$kdjurusan = $_GET['kdjurusan'];
//Import File Koneksi Database
require_once('../koneksi.php');
//Membuat SQL Query
$sql = "DELETE FROM tbl_jurusan WHERE kdjurusan=$kdjurusan;";
//Menghapus Nilai pada Database
if(mysqli_query($con,$sql)){
    echo 'Berhasil Menghapus data Jurusan';
    }else{
    echo 'Gagal Menghapus data Jurusan';
    }
    mysqli_close($con);
    ?>