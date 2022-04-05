<?php 
	include 'conn.php';

	error_reporting(0);

	session_start();

	if (isset($_SESSION['email'])) {
		header("location: index.php");
	}//end if
	if (isset($_POST['submit'])) {

		$userName = $_POST['fname'];
		$userEmail = $_POST['email'];
		$userPass = $_POST['password'];
		$cPass = $_POST['confirmPassword'];

		// hash-pass
		$pHash = md5($userPass);
		$cHash = md5($cPass);

		if ($userPass == $cPass) {
			$query = "SELECT * FROM tb_User WHERE email_User='$userEmail'";
			$result = mysqli_query($conn, $query);
			if ($result->num_rows == 0) {
				$query ="INSERT  INTO tb_User (userName, email_User, pass_User)
						 VALUES ('$userName','$userEmail','$pHash')";

				$result = mysqli_query($conn, $query);
				if ($result) {
					echo "<script>alert('Success!')</script>";
					header("location: index.php");
				}else{
					echo "<script>alert('Pendaftaran Gagal!')</script>";
				}
			}else{
				echo "<script>alert('email telah digunakan!')</script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="custom.css">

	<title>Sign Up | DATABASE MAHASISWA</title>
</head>
<body>
	<div class="container mt-4">
		<div class="row ">
			<div class="col-md-12">
				<div class="card position-absolute top-50 start-50 translate-middle" style="width:65%;">
					<div class="card-header navbar">
						<span class="align-middle p-2">SIGN UP</span>
						<span class="align-middle p-2">ICON</span>
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<label for="name" class="form-label">Name</label>
							<div class="mb-3 row">
								<div class="col">
									<input type="text" name="fname" class="form-control col" placeholder="First name" value="<?php echo $userName; ?>" required>
								</div>
								<div class="col">
									<input type="text" name="lname" class="form-control col" placeholder="Last name">
								</div>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" name="email" class="form-control" placeholder="youremail@example.com" value="<?php echo $userEmail; ?>" required>
							</div>
							<div class="mb-3 row">
								<div class="col">
									<label for="password" class="form-label">Password</label>
									<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $userPass; ?>" required>
								</div>
								<div class="col">
									<label for="confirmPassword" class="form-label">Confirm password</label>
									<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm password" value="<?php echo $cPass; ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<div class="col-sm-2 ml-2">
									<button type="submit" name="submit" class="btn btn-primary">SignUp</button>
								</div>
								<div class="col-sm">
									<p class="fs-6 text-muted mt-2">By clicking signup, you agree to ours Terms and Data Privacy Policy.</p>
								</div>
							</div>
							<div class="row">
								<div class="col ">
									Already have an account? <a href="login.php" target="blank" class="login-register-text">Login</a>
								</div>
							</div>
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