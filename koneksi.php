<?php


 $server = "localhost"; //sesuaikan dengan nama server
$user = "root"; //sesuaikan username
$password = ""; //sesuaikan password
$database = "api_sekolah"; //sesuaikan nama database
$con = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()) {
echo "Gagal terhubung MySQL: " . mysqli_connect_error();
}
?>