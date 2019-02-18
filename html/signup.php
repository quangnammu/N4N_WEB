<?php 
include ('../php/connect.php');
$notify=0;
if (isset($_POST['btn_submit'])){
	$username=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];

	$sql= "SELECT * FROM login WHERE user ='$username' ";
	$results= mysqli_query($db , $sql);
	$row = mysqli_num_rows($results);
	if($row >=1){
		 $notify=1;

	}else{
		$sql1= "INSERT INTO login (user, password, email) VALUES ('".$username."','".$pass."','".$email."') ";
		$query = mysqli_query($db , $sql1);
		header('location:login.php');
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	
	<div class="login-page">
		<div class="form">
			<form class="register-form" action="signup.php" method="POST">
				<input type="text" placeholder="name" name="user" required />
				<input type="password" placeholder="password" name="pass" required />
				<input type="text" placeholder="Email" name="email" required />
				<p style="text-align: center; color: red;">
					<?php 
						if ($notify==1) echo "User đã tồn tại !" ;
					 ?>
				</p>
				<input type="submit" class="button" name="btn_submit" value="create">
				<p class="message">Already registered? <a href="login.php">Sign In</a></p>
			</form>
		</div>
	</div>

	
	<script src="../vendor/js/jquery.min.js"></script>
	<script src="../vendor/js/bootstrap.min.js"></script>
	
	
</body>
</html>