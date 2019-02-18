<?php
session_start(); 
if($_SESSION['username']!="admin"){
	header('location: login.php');
}
if( isset($_GET["company_Product"]) ){
	$company = $_GET["company_Product"];
	settype($company, "string");
}else{
	$company = "";	
}
$thongbao="";
if (isset($_POST['add-submit'])) {
	$ten = $_POST['ten'];
	$gia = $_POST['gia'];
	$hang = $_POST['hang'];
	$manghinh = $_POST['manghinh'];
	$hedieuhanh = $_POST['hedieuhanh'];
	$camerasau = $_POST['camerasau'];
	$cameratruoc = $_POST['cameratruoc'];
	$cpu = $_POST['cpu'];
	$ram = $_POST['ram'];
	$bonhotrong = $_POST['bonhotrong'];
	$pin = $_POST['pin'];

	settype($gia, "integer");
		
		
	
	$dir = '/Web MMT/img/';
	$file = $dir.basename($_FILES['anh']['name']);
	move_uploaded_file($_FILES['anh']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$file);
	if ($gia != 0){
		include('../php/connect.php');
		$sql = "INSERT INTO product(name_Product, company_Product, price_Product, img, Screen,  operating_system , Rear_camera , Front_camera , CPU, RAM , Internal_memory , Battery_capacity ) VALUES ('$ten', '$hang', $gia, '$file','$manghinh','$hedieuhanh','$camerasau','$cameratruoc','$cpu','$ram','$bonhotrong','$pin')";
		$query = mysqli_query($db, $sql);
		$thongbao= "Thêm thành công !";
		
	}
	if ($gia==0) $thongbao="Thêm thất bại !";
	
	
	
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

				<form class="navbar-form navbar-left" method="get" action="../index.php">
					<div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search">
					</div>
					<button  class="btn btn-red"><input style="border: none;" type="submit" name="btn_search" value="Tìm Kiếm" /></button>
				</form>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
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
		<h2>Quản Lí Sản Phẩm</h2>

		<ul class="nav nav-tabs">

			<li class="active"><a data-toggle="tab" href="#menu1">ADD Product </a></li>
			<li><a data-toggle="tab" href="#menu2">DELETE Product </a></li>

		</ul>

		<div class="row">

			<div class="tab-content col-md-12">

				<div id="menu1" class="tab-pane fade in active">

					<div class="panel panel-default fadd">

						<div class="panel-heading"><h2>ADD Product</h2> </div>
						<div class="panel-body"  style="padding-left: 7px; padding-right: 7px;">
							<form action="Admin.php" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label for="ten">Tên:</label>
									<input type="text" class="form-control" data-ten="Ahihi" id="ten" placeholder="Tên sản phẩm" name="ten">
								</div>

								<div class="form-group">
									<label for="gia">Giá:</label>
									<input type="text" class="form-control" id="gia" placeholder="Giá Tiền" name="gia">
								</div>

								<div class="form-group">
									<label for="hang">Hãng:</label>
									<input type="text" class="form-control" id="hang" placeholder="Hãng" name="hang">
								</div>

								<div class="form-group">
									<label for="manghinh">Màng Hình:</label>
									<input type="text" class="form-control" id="manghinh" placeholder="Màng Hình" name="manghinh">
								</div>


								<div class="form-group">
									<label for="hedieuhanh">Hệ Điều Hành:</label>
									<input type="text" class="form-control" id="hedieuhanh" placeholder="Hệ Điều Hành" name="hedieuhanh">
								</div>

								
								<div class="form-group">
									<label for="camerasau">Camera Sau:</label>
									<input type="text" class="form-control" id="camerasau" placeholder="Camera Sau" name="camerasau">
								</div>

								
								<div class="form-group">
									<label for="cameratruoc">Camera Trước:</label>
									<input type="text" class="form-control" id="cameratruoc" placeholder="Camera Trước" name="cameratruoc">
								</div>

								
								<div class="form-group">
									<label for="cpu">CPU:</label>
									<input type="text" class="form-control" id="cpu" placeholder="CPU" name="cpu">
								</div>

								
								<div class="form-group">
									<label for="ram">RAM:</label>
									<input type="text" class="form-control" id="ram" placeholder="RAM" name="ram">
								</div>

								
								<div class="form-group">
									<label for="bonhotrong">Bộ Nhớ Trong:</label>
									<input type="text" class="form-control" id="bonhotrong" placeholder="Bộ Nhớ Trong" name="bonhotrong">
								</div>

								
								<div class="form-group">
									<label for="pin">Pin:</label>
									<input type="text" class="form-control" id="pin" placeholder="Pin" name="pin">
								</div>

								

								<div class="form-group">
									<label for="anh">Hình ảnh:</label>
									<input type="file" class="form-control" name="anh">
								</div>

								<input type="submit" name="add-submit" value="Thêm" class="btn btn-info" />
							
								
									<p style="color: red;"><strong><?php echo $thongbao; ?></strong></p>

							</form>
						</div>

					</div>
				</div>




				<div id="menu2" class="tab-pane fade">

					<div class="panel panel-default fadd">

						<div class="panel-heading"> <h2>DELETE Product</h2> </div>
						<div class="panel-body" style="padding-left: 7px; padding-right: 7px;" >



							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Company</th>
										<th>Price</th>
										<th>Screen</th>
										<th>operating_system</th>
										<th>Rear camera</th>
										<th>Front camera</th>
										<th>CPU</th>
										<th>RAM</th>
										<th>Internal_memory</th>
										<th>Battery_capacity</th>
										<th>Delete/Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									include('../php/connect.php');
									$sql = "SELECT * FROM product";
									$query = mysqli_query($db, $sql);
									while ($row = mysqli_fetch_array($query)) {
										?>
										<tr>
											<td><?php echo $row['id_Product']?></td>
											<td><?php echo $row['name_Product']?></td>
											<td><?php echo $row['company_Product']?></td>
											<td><?php echo $row['price_Product']. "  "."VNĐ"?></td>
											<td><?php echo $row['Screen']?></td>
											<td><?php echo $row['operating_system']?></td>
											<td><?php echo $row['Rear_camera']?></td>
											<td><?php echo $row['Front_camera']?></td>
											<td><?php echo $row['CPU']?></td>
											<td><?php echo $row['RAM']?></td>
											<td><?php echo $row['Internal_memory']?></td>
											<td><?php echo $row['Battery_capacity']?></td>
											<td style="padding-right: 5px;padding-left: 5px;"> <a style="margin-right: 10px" href = "delete_product.php?id=<?php echo ($row['id_Product']) ?>"><img src="../img/erase.png" alt="Delete"></a>
												<a href = "edit_product.php?id=<?php echo ($row['id_Product']) ?>"> <img src="../img/edit.png" alt="Edit"> </a>  </td>
											</tr>

											<?php 
										} ?>
									</tbody>
								</table>



							</div>

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