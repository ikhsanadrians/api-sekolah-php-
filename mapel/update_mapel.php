<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //MEndapatkan Nilai Dari Variable
 $kdmapel = $_POST['kdmapel'];
 $namamapel = $_POST['namamapel'];

 //import file koneksi database
 require_once('../koneksi.php');

 //Membuat SQL Query
 $sql = "UPDATE tbl_mapel SET namamapel = '$namamapel' WHERE kdmapel = $kdmapel;";
 //Meng-update Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Update Data Mapel';
 }else{
 echo 'Gagal Update Data Mapel';
 }
 mysqli_close($con);
}
?>