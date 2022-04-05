<?php 
	
	include 'conn.php';

	$id = $_GET['id_Mhs'];
	$query = "SELECT * FROM tb_Mahasiswa WHERE id_Mhs = $id LIMIT 1";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);

 ?>
<!DOCTYPE html>
<html>"
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="	width=device-width, initial-scale=1">

		<link rel="stylesheet" href="bootstrap.css">

		<title>Edit Mahasiswa</title>

	</head>
	<body>
	
		<div class="container mt-2">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card">
						<div class="card-header">
							EDIT MAHASISWA
						</div>
						<div class="card-body">
							<form action="update.php" method="POST">

								<div class="form-group">
									<label>NIM</label>
									<input type="number" name="nim_Mhs" value="<?php echo $row['nim_Mhs']?>" placeholder="Masukan NIM Mahasiswa" class="form-control">

									<input type="hidden" name="id_Mhs" value="<?php echo $row['id_Mhs']?>">

								</div>
								<div class="form-group">
									<label>NAMA</label>
									<input type="text" name="nama_Mhs" value="<?php echo $row['nama_Mhs']?>" placeholder="Masukan Nama Mahasiswa" class="form-control">
								</div>
								<div class="form-group">
									<label>JURUSAN</label>
									<input type="text" name="jurusan_Mhs" value="<?php echo $row['jurusan_Mhs']?>" placeholder="Masukan Jurusan Mahasiswa" class="form-control">
								</div>
								
								<button type="submit" class="btn btn-success">UPDATE</button>
								<button type="reset" class="btn btn-warning">RESET</button>


							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		
	</body>
</html>