<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //MEndapatkan Nilai Dari Variable
 $kdjurusan = $_POST['kdjurusan'];
 $namasiswa = $_POST['namasiswa'];

 //import file koneksi database
 require_once('../koneksi.php');

 //Membuat SQL Query
 $sql = "UPDATE tbl_jurusan SET namajurusan = '$namajurusan' WHERE kdjurusan = $kdjurusan;";
 //Meng-update Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Update Data Jurusan';
 }else{
 echo 'Gagal Update Data Jurusan';
 }
 mysqli_close($con);
}
?>