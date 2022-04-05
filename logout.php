<?php 
	session_start();
	session_destroy();
	
	if (session_destroy == true ){
		
		echo '<script type="text/javascript">';
		echo 'alert("logout success!");';
		echo 'window.location.href = "login.php";';
		echo '</script>';


		// echo "<script>alert('logout success!')</script>";
	}
 ?>