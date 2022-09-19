<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
 //MEndapatkan Nilai Dari Variable
 $kdguru    = $_POST['kdguru'];
 $nip       = $_POST['nip'];
 $namaguru  = $_POST['namaguru'];
 $jk        = $_POST['jk'];
 $alamat    = $_POST['alamat'];

 //import file koneksi database
 require_once('../koneksi.php');

 //Membuat SQL Query
 $sql = "UPDATE tbl_guru SET nip = '$nip', namaguru = '$namaguru', jk = '$jk', alamat = '$alamat' WHERE kdguru = $kdguru;";
 //Meng-update Database
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Update Data Guru';
 }else{
 echo 'Gagal Update Data Guru';
 }
 mysqli_close($con);
}
?>