<?php
global $kdjurusan;
require_once('../koneksi.php');
if(isset($_GET['kdjurusan'])){
$kdjurusan = $_GET['kdjurusan'];
}
$result = array();
 $sql = "SELECT * FROM tbl_jurusan WHERE kdjurusan='$kdjurusan';";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>