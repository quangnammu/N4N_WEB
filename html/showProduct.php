<?php 
session_start(); 
include('../php/connect.php');
if( isset($_GET["name_Product"]) ){
	$name = $_GET["name_Product"];
	settype($name, "string");
}else{
	$name = "name_Product";	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Product</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/1.css">
	<link rel="stylesheet" href="../vendor/css/bootstrap.min.css" >
</head>
<body>
	<!--header-->
	<div id="header">
		<nav class="navbar navbar-inverse" data-spy="affix"  style="margin-bottom: 0px; position: fixed;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="../index.php">N4N WEB</a>
				</div>

				<ul class="nav navbar-nav">
					<?php 
						if ( $_SESSION['username']== "admin" ) echo "<li ><a href=".'"Admin.php"'.">Quản Lý</a></li>";
					 ?>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh Mục Điện Thoại <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php 
							include('../php/connect.php');
							$query = mysqli_query($db ,"SELECT DISTINCT company_Product FROM product" );
							while($row = mysqli_fetch_array($query)){
								$company_p=($row['company_Product']);
								
								echo "<li><a href='../index.php?company_Product=$company_p'>$company_p</a></li>";
								 }
								?>
								

							
						</ul>
					</li>
					
				</ul>

				<form class="navbar-form navbar-left" method="get" action="../index.php">
					<div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search">
					</div>
					<button  class="btn btn-red"><input style="border: none;" type="submit" name="btn_search" value="Tìm Kiếm" /></button>
				</form>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 
						<?php if($_SESSION['username'] != null) {
							echo $_SESSION['username'];
						} else {
							echo "Login";
						}
						?>
					</a></li>
				</ul>
			</div>
		</nav>

		

	</div>
	<!--header-->

	<!--content-->
	<div class="container box_content" style=" margin-top: 52px; height: 451px;">
		<?php 
		
		$query = mysqli_query($db ,"SELECT * FROM product WHERE name_Product='$name' " );
		$row = mysqli_fetch_array($query);
		
		?>
		<div class="left_content">
			<img src="<?php echo "../".$row['img'] ?>" alt="" style="height: 400px; width:400px; margin-top: 25px;">
		</div>
		<div class="right_content">
			<div id="thong-so-ky-thuat" class="tableparameter">
				<h2>Thông số Kỹ Thuật</h2>

				<ul class="list-group">
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>Màn hình:</b></span>
						<span class="specval"><?php echo($row['Screen'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>Hệ điều hành:</b></span>
						<span class="specval"><?php echo($row['operating_system'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>Camera sau:</b></span>
						<span class="specval"><?php echo($row['Rear_camera'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>Camera trước:</b></span>
						<span class="specval"><?php echo($row['Front_camera'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>CPU:</b></span>
						<span class="specval"><?php echo($row['CPU'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>RAM:</b></span>
						<span class="specval"><?php echo($row['RAM'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>Bộ nhớ trong:</b></span>
						<span class="specval"><?php echo($row['Internal_memory'])?></span>
					</li>
					<li class="list-group-item list-group-item-info">
						<span class="specname"><b>Dung lượng pin:</b></span>
						<span class="specval"><?php echo($row['Battery_capacity'])?></span>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
	
	
	<!--content-->

	<!--footer-->
	<footer class="footer">
		<p style="font-size: 14px;">Các thành viên cùng thực hiện:<br> Huỳnh Quang Nam <br> Huỳnh Văn Mỹ <br> Nguyễn Phước Tâm <br> Phạm Lành.</p>

	</footer>
	<!--footer-->

	<script src="../vendor/js/jquery.min.js"></script>
	<script src="../vendor/js/bootstrap.min.js"></script>
</body>
</html>