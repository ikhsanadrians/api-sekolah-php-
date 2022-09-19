<?php
global $kdkelas;
require_once('../koneksi.php');
if(isset($_GET['kdkelas'])){
$kdkelas = $_GET['kdkelas'];
}
$result = array();
 $sql = "SELECT * FROM tbl_kelas WHERE kdkelas='$kdkelas';";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>