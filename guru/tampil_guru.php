<?php
require_once('../koneksi.php');
if(isset($_GET['kdguru'])){
$kdguru = $_GET['kdguru'];
}
$result = array();
$query = mysqli_query($con,"SELECT * FROM tbl_guru ORDER BY kdguru DESC");
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>