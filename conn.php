<?php 
	
	$hostName= "localhost";
	$userName= "root";
	$password= "rahasia";
	$dbName= "db_Kampus";

	$conn = mysqli_connect($hostName, $userName, $password, $dbName);

	if (!$conn) {
		echo "Koneksi Gagal! ".mysqli_connect_error()." error code : ".mysqli_connect_errno();
	}
	
 ?>