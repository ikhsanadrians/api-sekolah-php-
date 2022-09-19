<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //MEndapatkan Nilai Dari Variable
 $kdkelas = $_POST['kdkelas'];
 $namakelas = $_POST['namakelas'];

 //import file koneksi database
 require_once('../koneksi.php');

 //Membuat SQL Query
 $sql = "UPDATE tbl_kelas SET namakelas = '$namakelas' WHERE kdkelas = $kdkelas;";
 //Meng-update Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Update Data Kelas';
 }else{
 echo 'Gagal Update Data Kelas';
 }
 mysqli_close($con);
}
?>