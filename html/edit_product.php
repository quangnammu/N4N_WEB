<?php

session_start(); 
if($_SESSION['username']!="admin"){
	header('location: html/login.php');
}
if( isset($_GET["company_Product"]) ){
	$company = $_GET["company_Product"];
	settype($company, "string");
}else{
	$company = "";	
}

if( isset($_GET["id"]) ){
	$id = $_GET["id"];
	settype($id, "int");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Quan Ly</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/1.css">
	<link rel="stylesheet" href="../vendor/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript"></script>
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
					<li ><a href="../html/Admin.php">Quản Lý</a></li>
					
					
				</ul>

				<form class="navbar-form navbar-left" method="get" action="index.php">
					<div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search">
					</div>
					<button  class="btn btn-red"><input style="border: none;" type="submit" name="btn_search" value="Tìm Kiếm" /></button>
				</form>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="html/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="html/login.php"><span class="glyphicon glyphicon-log-in"></span>
						<?php 
						
						if($_SESSION['username']!=null) {
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


	<div class="container" style=" margin-top: 52px; height: 451px;">
		

		<h2>Quản lý sản phẩm</h2>

		<div class="row">

			<div class="tab-content col-md-12">

				<div id="menu1" class="tab-pane fade in active">

					<div class="panel panel-default fadd">

						<div class="panel-heading"><h2>Edit Product</h2> </div>
						<div class="panel-body">
							<form action="" method="get">

								<?php 
								include('../php/connect.php');
								
								$sql = "SELECT * FROM product WHERE id_Product = $id";
								$query = mysqli_query($db, $sql);
								$row = mysqli_fetch_array($query);
								?>

								<div class="form-group">
									<label for="id">ID:</label>
									<input type="text" class="form-control" id="id" value="<?php echo $row['id_Product']?>" name="id" readonly>
								</div>

								<div class="form-group">
									<label for="ten">Tên:</label>
									<input type="text" class="form-control" data-ten="Ahihi" id="ten" value="<?php echo $row['name_Product']?>" placeholder="Tên sản phẩm" name="ten">
								</div>

								<div class="form-group">
									<label for="gia">Giá:</label>
									<input type="text" class="form-control" id="gia" placeholder="Giá Tiền" name="gia" value="<?php echo $row['price_Product']?>">
								</div>

								<div class="form-group">
									<label for="hang">Hãng:</label>
									<input type="text" class="form-control" id="hang" placeholder="Hãng" name="hang" value="<?php echo $row['company_Product']?>">
								</div>
								
								<div class="form-group">
									<label for="manghinh">Màng Hình:</label>
									<input type="text" class="form-control" id="manghinh" placeholder="Màng Hình" name="manghinh" value="<?php echo $row['Screen']?>" >
								</div>


								<div class="form-group">
									<label for="hedieuhanh">Hệ Điều Hành:</label>
									<input type="text" class="form-control" id="hedieuhanh" placeholder="Hệ Điều Hành" name="hedieuhanh" value="<?php echo $row['operating_system']?>">
								</div>

								
								<div class="form-group">
									<label for="camerasau">Camera Sau:</label>
									<input type="text" class="form-control" id="camerasau" placeholder="Camera Sau" name="camerasau" value="<?php echo $row['Rear_camera']?>">
								</div>

								
								<div class="form-group">
									<label for="cameratruoc">Camera Trước:</label>
									<input type="text" class="form-control" id="cameratruoc" placeholder="Camera Trước" name="cameratruoc" value="<?php echo $row['Front_camera']?>">
								</div>

								
								<div class="form-group">
									<label for="cpu">CPU:</label>
									<input type="text" class="form-control" id="cpu" placeholder="CPU" name="cpu" value="<?php echo $row['CPU']?>">
								</div>

								
								<div class="form-group">
									<label for="ram">RAM:</label>
									<input type="text" class="form-control" id="ram" placeholder="RAM" name="ram" value="<?php echo $row['RAM']?>">
								</div>

								
								<div class="form-group">
									<label for="bonhotrong">Bộ Nhớ Trong:</label>
									<input type="text" class="form-control" id="bonhotrong" placeholder="Bộ Nhớ Trong" name="bonhotrong" value="<?php echo $row['Internal_memory']?>">
								</div>

								
								<div class="form-group">
									<label for="pin">Pin:</label>
									<input type="text" class="form-control" id="pin" placeholder="Pin" name="pin" value="<?php echo $row['Battery_capacity']?>">
								</div>
								<div class="form-group">
									<label for="anh">Hình ảnh:</label>
									<!-- <input type="file" class="form-control" name="anh" value="<?echo $row['img']?>"> -->
									<img src="<?php echo'../'.($row['img'])?>">

								</div>


								<button class="btn btn-red"><input style="border: none;" type="submit" name="edit-submit" value="Update" /></button>
							
								


							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--content-->
		
		<script src="../vendor/js/jquery.min.js"></script>
		<script src="../vendor/js/bootstrap.min.js"></script>
	</body>
	</html>
<?php
	include('../php/connect.php');
	if (isset($_GET['edit-submit'])) {

		$ten = $_GET['ten'];
		$gia = $_GET['gia'];
		$hang = $_GET['hang'];

		$manghinh = $_GET['manghinh'];
		$hedieuhanh = $_GET['hedieuhanh'];
		$camerasau = $_GET['camerasau'];
		$cameratruoc = $_GET['cameratruoc'];
		$cpu = $_GET['cpu'];
		$ram = $_GET['ram'];
		$bonhotrong = $_GET['bonhotrong'];
		$pin = $_GET['pin'];
		
		settype($gia, "integer");
		
		if ($gia != 0){
			$sql = "UPDATE product SET name_Product = '$ten', price_Product = $gia , company_Product = '$hang', Screen='$manghinh', operating_system='$hedieuhanh', Rear_camera='$camerasau', Front_camera='$cameratruoc', CPU='$cpu ', RAM='$ram', Internal_memory='$bonhotrong', Battery_capacity='$pin'  WHERE id_Product = $id";
			mysqli_query($db , $sql);
			echo '<div class="'.'alert alert-success'.'"><strong>Cập nhật thành công !</strong></div>';
		
		} 
		if($gia==0) {
			echo '<div class="'.'alert alert-danger'.'"><strong>Cập nhật thất bại !</strong></div>';
		}
		
		
		

	}
	?>  