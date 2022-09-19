<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //Mendapatkan Nilai Variable
//  $kdguru = $_POST['kdguru'];
 $nip = $_POST['nip'];
 $namaguru = $_POST['namaguru'];
 $jk = $_POST['jk'];
 $alamat = $_POST['alamat'];

 //Pembuatan Syntax SQL
 $sql = "INSERT INTO tbl_guru (nip,namaguru,jk,alamat) VALUES
('$nip','$namaguru','$jk','$alamat')";

 //Import File Koneksi database
 require_once('../koneksi.php');

 //Eksekusi Query database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menambahkan Guru';
 }else{
 echo 'Gagal Menambahkan Guru';
 }
 mysqli_close($con);
}
?>