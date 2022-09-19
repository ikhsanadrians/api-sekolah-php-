<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = "INSERT INTO tbl_user (username,passwords) VALUES ('$username','$password')";

 require_once('../koneksi.php');


 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menambahkan Siswa';
 }else{
 echo 'Gagal Menambahkan Siswa';
 }
 mysqli_close($con);
}
?>