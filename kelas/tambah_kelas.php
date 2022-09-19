<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //Mendapatkan Nilai Variable
 $kdkelas = $_POST['kdkelas'];
 $namakelas = $_POST['namakelas'];

 //Pembuatan Syntax SQL
 $sql = "INSERT INTO tbl_kelas (kdkelas,namakelas) VALUES
('$kdkelas','$namakelas')";

 //Import File Koneksi database
 require_once('../koneksi.php');

 //Eksekusi Query database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menambahkan data Kelas';
 }else{
 echo 'Gagal Menambahkan data Kelas';
 }
 mysqli_close($con);
}
?>