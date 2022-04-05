<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap.css">

	<title>Data Mahasiswa</title>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<span style="vertical-align: middle;">TAMBAH MAHASISWA</span>
					</div>
					<div class="card-body">
						<form action="save.php" method="POST">
							<div class="mb-3">
								<label for="nim" class="form-label">NIM</label>
								<input type="number" id="nim" name="nim_Mhs" placeholder="Isikan NIM" class="form-control" required>
							</div>
							<div class="mb-3">
								<label for="nama" class="form-label">NAMA</label>
								<input type="text" id="nama" name="nama_Mhs" placeholder="Isikan Nama Lengkap" class="form-control" required>
							</div>
							<div class="mb-3">
								<label for="jurusan" class="form-label">JURUSAN</label>
								<input type="text" id="jurusan" name="jurusan_Mhs" placeholder="Isikan Jurusan" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary">SUBMIT</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- SCRIPT -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>