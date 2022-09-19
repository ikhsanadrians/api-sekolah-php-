<?php
global $nis;
require_once('../koneksi.php');
if(isset($_GET['nis'])){
$nis = $_GET['nis'];
}
$result = array();
 $sql = "SELECT * FROM tbl_siswa WHERE nis='$nis';";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>