<?php  

if (!isset($_SESSION)) {
	session_start();
};

$koneksi = mysqli_connect('localhost','root','','stylish');

if (isset($_GET['logout'])) {
	
	session_destroy();
	header("Location:../login.php");

}

?>