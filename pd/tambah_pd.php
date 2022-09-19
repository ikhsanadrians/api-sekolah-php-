<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //Mendapatkan Nilai Variable
 $nis = $_POST['nis'];
 $namasiswa = $_POST['namasiswa'];
 $jk = $_POST['jk'];
 $alamat = $_POST['alamat'];

 //Pembuatan Syntax SQL
 $sql = "INSERT INTO tbl_siswa (nis,namasiswa,jk,alamat) VALUES
('$nis','$namasiswa','$jk','$alamat')";

 //Import File Koneksi database
 require_once('../koneksi.php');

 //Eksekusi Query database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menambahkan Siswa';
 }else{
 echo 'Gagal Menambahkan Siswa';
 }
 mysqli_close($con);
}
?>