<?php
require_once('../koneksi.php');
if(isset($_GET['kdkelas'])){
$kdkelas = $_GET['kdkelas'];
}
$result = array();
$query = mysqli_query($con,"SELECT * FROM tbl_kelas ORDER BY kdkelas
DESC");
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>