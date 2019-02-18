<?php  
session_start();
include ('../php/connect.php');
unset($_SESSION['username']);
$flag=false;
$error="Tên đăng nhập hoặc mật khẩu không đúng !";
if(isset($_POST['btn_signin'])){
	
	$name = $_POST['username'];
	$pass = $_POST['pass'];
	
	
	$sql= "SELECT * FROM login WHERE user ='$name' and password = '$pass' ";
	$results= mysqli_query($db , $sql);
	$row = mysqli_num_rows($results);
	if($row ==0){
		$flag= true;
	}
	else{
		$_SESSION['username'] = $name;
		header('location:../index.php') ;
	}	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>


	<div class="login-page">
		<div class="form">
			<form class="login-form" action="login.php" method="POST">
				<input type="text" placeholder="username" name="username" />
				<input type="password" placeholder="password" name="pass" />
				<p style="text-align: center; color: red;">
					<?php 
					if ($flag== true) echo $error;
					?>	
				</p>
				<input type="submit" class="button" name="btn_signin" value="LOGIN">
				<p class="message">Not registered? <a href="signup.php">Create an account</a></p>
			</form>
		</div>
	</div>



	<script src="../vendor/js/jquery.min.js"></script>
	<script src="../vendor/js/bootstrap.min.js"></script>


</body>
</html>
