<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //Mendapatkan Nilai Variable
 $kdmapel = $_POST['kdmapel'];
 $namamapel = $_POST['namamapel'];

 //Pembuatan Syntax SQL
 $sql = "INSERT INTO tbl_mapel (kdmapel,namamapel) VALUES
('$kdmapel','$namamapel')";

 //Import File Koneksi database
 require_once('../koneksi.php');

 //Eksekusi Query database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menambahkan data Mapel';
 }else{
 echo 'Gagal Menambahkan data Mapel';
 }
 mysqli_close($con);
}
?>