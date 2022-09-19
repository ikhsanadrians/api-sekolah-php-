<?php
global $kdguru;
require_once('../koneksi.php');
if(isset($_GET['kdguru'])){
$kdguru = $_GET['kdguru'];
}
$result = array();
 $sql = "SELECT * FROM tbl_guru WHERE kdguru='$kdguru';";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>