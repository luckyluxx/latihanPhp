<?php 

	// include koneksi ke database
	include 'conn.php';

	// get data dari form 
	$nim_mhs = $_POST['nim_Mhs'];
	$nama_mhs = $_POST['nama_Mhs'];
	$jurusan_mhs = $_POST['jurusan_Mhs'];

	// sql query insert data kedalam database
	$query = "INSERT INTO tb_Mahasiswa (nim_Mhs, nama_Mhs, jurusan_Mhs)
	VALUES ('$nim_mhs', '$nama_mhs', '$jurusan_mhs')";

	if ($conn->query($query)) {

		header("location:index.php");

	}else {

		echo "DATA GAGAL DISIMPAN!".mysqli_connect_error()." error code : ".mysqli_connect_errno();
		
	}

 ?>