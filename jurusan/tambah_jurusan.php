<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 //Mendapatkan Nilai Variable
 $kdjurusan = $_POST['kdjurusan'];
 $namajurusan = $_POST['namajurusan'];

 //Pembuatan Syntax SQL
 $sql = "INSERT INTO tbl_jurusan (kdjurusan,namajurusan) VALUES
('$kdjurusan','$namajurusan')";

 //Import File Koneksi database
 require_once('../koneksi.php');

 //Eksekusi Query database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menambahkan data Jurusan';
 }else{
 echo 'Gagal Menambahkan data Jurusan';
 }
 mysqli_close($con);
}
?>