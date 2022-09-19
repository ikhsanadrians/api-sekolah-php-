<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 //Mendapatkan Nilai Variable
 $kdnilai = $_POST['kdnilai'];
 $nis = $_POST['nis'];
 $kdguru = $_POST['kdguru'];
 $kdjurusan = $_POST['kdjurusan'];
 $kdkelas = $_POST['kdkelas'];
 $kdmapel = $_POST['kdmapel'];
 $uts = $_POST['uts'];
 $uas = $_POST['uas'];
 $na = ($uts+$uas)/2;
 $na = round($na,2);
  //Pembuatan Syntax SQL
  $sql = "INSERT INTO tbl_nilai
  (kdnilai,nis,kdguru,kdjurusan,kdkelas,kdmapel,uts,uas,na) VALUES
  ('$kdnilai','$nis','$kdguru','$kdjurusan','$kdkelas','$kdmapel','$uts','$uas','$na')";
  
   //Import File Koneksi database
   require_once('../koneksi.php');
  
   //Eksekusi Query database
   if(mysqli_query($con,$sql)){
   echo 'Berhasil Menambahkan Nilai';
   }else{
   echo 'Gagal Menambahkan Nilai';
   }
   mysqli_close($con);
  }
  ?>
  