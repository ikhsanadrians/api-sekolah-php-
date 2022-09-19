<?php
require_once('../koneksi.php');
if(isset($_GET['kdmapel'])){
$kdmapel = $_GET['kdmapel'];
}
$result = array();
$query = mysqli_query($con,"SELECT * FROM tbl_mapel ORDER BY kdmapel
DESC");
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>