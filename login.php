<?php 
    include 'conn.php';

    error_reporting(0);

    session_start();

    if (isset($_SESSION['email'])) {
        header("location: index.php");
    }//end if

    if (isset($_POST['submit'])) {
        $userEmail = $_POST['email'];
        $userPass = $_POST['password'];
        
        $pHash = md5($userPass);

        $query = "SELECT * FROM tb_User WHERE email_User='$userEmail' AND pass_User='$pHash'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {

            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['$userEmail'];
            header('location: index.php');

        }elseif ($result->num_rows == 0) {
            echo "<script>alert('User not found! please register first')</script>";
        }else{
            echo "<script>alert('login gagal!')</script>";
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
 	

 	<script src="https://kit.fontawesome.com/d23d6142df.js" crossorigin="anonymous"></script>
 	<title>Database Login Page</title>
 </head>
 <body>
 		<div class="container mt-4">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="card position-absolute top-50 start-50 translate-middle" style="width:65%;">
 						<div class="card-header navbar">
 							<span class="align-middle p-2">LOGIN PAGE</span>
 							<span class="align-middle p-2"><i class="fa-solid fa-feather fa-2x"></i></span>
 						</div>
 						<div class="card-body">
 							<form action="" method="POST">
 								<div class="mb-3">
 									<label for="email" class="email" >Email</label>
 									<input type="EMAIL" id="email" name="email" placeholder="example@student.unmer.ac.id" class="form-control" value="<?php echo $userEmail; ?>" required />
 								</div>
 								<div class="mb-3">
 									<label for="passwd" class="passwd" >Password</label>
 									<input type="password" id="passwd" name="password" placeholder="********" class="form-control" value="<?php echo $userPass; ?>" required />
 								</div>
                                <div class="col mb-3">
                                    captcha
                                </div>
 								<div class="row mb-3">
                                    <div class="col-sm">
									   <input type="text" name="CaptchaCode" id="CaptchaCode" />
                                    </div>
                                    <div class="col-sm">
 									  <label for="CaptchaCode">Retype the character from the pictures</label>
                                    </div>
                                    <div class="col-sm">
                                        
                                    </div>
 								</div>

 								<button type="submit" name="submit" class="btn btn-primary" >LOGIN</button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 
 </body>
 </html>