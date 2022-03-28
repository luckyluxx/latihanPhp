<?php
	// include koneksi ke database
	include 'conn.php';

	// ambil data
	$id_Mhs = $_POST['id_Mhs'];
	$nim_Mhs = $_POST['nim_Mhs'];
	$nama_Mhs = $_POST['nama_Mhs'];
	$jurusan_Mhs = $_POST['jurusan_Mhs'];

	// query update data ke database
	$query = "UPDATE tb_Mahasiswa SET 
		nim_Mhs = '$nim_Mhs',
		nama_Mhs = '$nama_Mhs',
		jurusan_Mhs = '$jurusan_Mhs'
		WHERE id_Mhs = '$id_Mhs'
		";

	// jika berhasil maka
	if ($conn->query($query)) {
		
		header("location: index.php");

	}else{

		echo "DATA GAGAL DIUPDATE!".mysqli_connect_error()." error code : ".mysqli_connect_errno();

	}

?>