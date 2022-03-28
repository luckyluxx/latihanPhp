<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="custom.css">
	<title>Data Mahasiswa</title>
</head>
<body>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<span style="vertical-align: middle;">DATA MAHASISWA</span>
						<a href="addNew.php" style="float: right;" class="btn btn-sm btn-success">Tambah Data</a>
					</div>
					<div class="card-body">
						<table class="table table-bordered" id="myTable">
							<thead>
								<tr>
									<th scope="col">NO.</th>
									<th scope="col">NIM</th>
									<th scope="col">NAMA</th>
									<th scope="col">JURUSAN</th>
									<th scope="col">AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									include 'conn.php';

									$no = 1;
									$query = mysqli_query($conn, "SELECT * FROM tb_Mahasiswa");
									while ($row = mysqli_fetch_array($query)) {
								?>
								<tr>
							 		<td><?php echo $no++ ?></td>
							 		<td><?php echo $row['nim_Mhs'] ?></td>
							 		<td><?php echo $row['nama_Mhs'] ?></td>
							 		<td><?php echo $row['jurusan_Mhs'] ?></td>
							 		<td class="text-center">
							 			<a href="edit.php?id_Mhs=<?php echo $row['id_Mhs'] ?>" class="btn btn-sm btn-warning">EDIT</a>
							 			<a href="delete.php?id_Mhs=<?php echo $row['id_Mhs']?>" class="btn btn-sm btn-danger">HAPUS</a>
							 		</td>
							 	</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- SCRIPT -->

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
	
	$(document).ready(function () {
		$('#myTable').DataTable();
	});
</script>

</body>
</html>