<?php 
	
	// include koneksi ke database
	include 'conn.php';

	// ambil nilai id pada tabel
	$id = $_GET['id_Mhs'];

	// query hapus seluruh row dengan id yang dipilih
	$query = "DELETE FROM tb_Mahasiswa WHERE id_Mhs = '$id'";

	// jika query berhasil maka
	if ($conn->query($query)) {
		
		header("location:index.php");

	}else{

		echo "DATA GAGAL DIHAPUS! ".mysqli_connect_error()." error code : ".mysqli_connect_errno();
	}
	
 ?>