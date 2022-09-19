<?php
require_once('../koneksi.php');
if(isset($_GET['kdjurusan'])){
$kdjurusan = $_GET['kdjurusan'];
}
$result = array();
$query = mysqli_query($con,"SELECT * FROM tbl_jurusan ORDER BY kdjurusan
DESC");
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>