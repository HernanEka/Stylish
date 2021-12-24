<?php  

if (!isset($_SESSION)) {
	session_start();
};

$koneksi = mysqli_connect('localhost','root','','stylish');

?>