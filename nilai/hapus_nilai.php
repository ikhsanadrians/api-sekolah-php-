<?php
global $nis;
require_once('../koneksi.php');
if(isset($_GET['nis'])){
    $nis = $_GET['nis'];
 }

 //Membuat SQL Query
 $sql = "DELETE FROM siswa WHERE nis='$nis';";
 //Menghapus Data siswa
 if(mysqli_query($con,$sql)){
 echo 'Berhasil hapus Data Siswa';
 }else{
 echo 'Gagal hapus Data Siswa';
 }
 mysqli_close($con);
?>