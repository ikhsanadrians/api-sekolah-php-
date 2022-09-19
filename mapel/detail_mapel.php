<?php
global $kdmapel;
require_once('../koneksi.php');
if(isset($_GET['kdmapel'])){
$kdmapel = $_GET['kdmapel'];
}
$result = array();
 $sql = "SELECT * FROM tbl_mapel WHERE kdmapel='$kdmapel';";
$query = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($query)){
 $result[] = $row;
}
echo json_encode(array('result'=>$result));
?>