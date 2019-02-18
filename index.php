<?php
session_start(); 

if(!$_SESSION['username']){
	header('location: html/login.php');

}
include('php/connect.php');
$productInOnePage = 12; 

if( isset($_GET["page"]) ){
	$page = $_GET["page"];
	settype($page, "int");
}else{
	$page = 1;	
}

if( isset($_GET["company_Product"]) ){
	$company = $_GET["company_Product"];
	settype($company, "string");
}else{
	$company = "";	
}


if( isset($_GET["search"]) ){
	$search = $_GET["search"];
	
	
}else {
	$search = "";
}

if( isset($_GET["tren"])){
	$tren = $_GET["tren"];
	settype($tren, "int");
	
}else{
	$tren = "";	
	
}

if (isset($_GET["duoi"])){
	$duoi = $_GET["duoi"];
	settype($duoi, "int");
}else{
	$duoi = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>N4N WEB</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/1.css">
	<link rel="stylesheet" href="vendor/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>


</head>


<body >
	<!--header-->
	<div id="header">
		<nav class="navbar navbar-inverse" data-spy="affix"  style="margin-bottom: 0px; position: fixed;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">N4N WEB</a>
				</div>

				<ul class="nav navbar-nav">
					<?php 
						if ( $_SESSION['username']== "admin" ) echo "<li ><a href=".'"html/Admin.php"'.">Quản Lý</a></li>";
					 ?>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh Mục Điện Thoại <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php 
							
							$query = mysqli_query($db ,"SELECT DISTINCT company_Product FROM product" );
							while($row = mysqli_fetch_array($query)){
								$company_p=($row['company_Product']);
								echo "<li><a href='index.php?company_Product=$company_p'>$company_p</a></li>";
							} 
							?>
						</ul>
					</li>
					
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
	<div class="container " style="margin-top: 52px;">

		<div id="carousel-id" class="carousel slide" data-ride="carousel" >
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<div class="item active">
						<img src="img/hinh2.jpg" alt="LG Q7" style="width:100%;">
						<div class="carousel-caption">
							<h3> LG Q7</h3>
							<p>Hàng mới sắp về</p>
						</div>
					</div>

					<div class="item">
						<img src="img/hinh3.jpg" alt="SHARP AQUOS S2 FULLBOX" style="width:100%;">
						<div class="carousel-caption">
							<h3>SHARP AQUOS S2 FULLBOX</h3>
							<p>Hàng mới sắp về</p>
						</div>
					</div>

					<div class="item">
						<img src="img/hinh1.jpg" alt="Black Shark 2" style="width:100%;">
						<div class="carousel-caption">
							<h3>Black Shark 2</h3>
							<p>Hàng không bán</p>
						</div>
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="cate-main">
			<aside class="choose-cate">
				<u><b  >Chọn Mức Giá</b></u><br>
				

				<form action="#" method="get">
					
				</form>
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 176px;">Chọn Giá
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="<?php echo"index.php?tren=2000000&company_Product=$company&search=$search " ?>">Dưới 2 triệu</a></li>
							<li><a href=" <?php echo"index.php?duoi=2000000&tren=4000000&company_Product=$company&search=$search " ?>">Từ 2 đến 4 triệu</a></li>
							<li><a href=" <?php echo"index.php?duoi=4000000&tren=7000000&company_Product=$company&search=$search " ?>">Từ 4 đến 7 triệu</a></li>
							<li><a href=" <?php echo"index.php?duoi=7000000&company_Product=$company&search=$search " ?>">Trên 7 triệu</a></li>
						</ul>
					</div>
				<?php

					
					$xau="";
					if($tren ==null&&$duoi==null) $xau="";
					else if($duoi==null && $tren !=null) $xau="AND price_Product < $tren";
					else if($tren==null && $duoi!=null) $xau="AND price_Product > 7000000";
					else $xau="AND price_Product between $duoi AND $tren";

					if ($company=="" && $search!="") $xau="name_Product like '%".$search."%' ".$xau;
					else if ($search=="" && $company!="") $xau="company_Product='".$company."' ".$xau;
					else if ($company=="" && $search=="" ) {
						if($tren ==null&&$duoi==null) $xau="";
						else if($duoi==null && $tren !=null) $xau="WHERE price_Product < $tren";
						else if($tren==null && $duoi!=null) $xau="WHERE price_Product > 7000000";
						else $xau="WHERE price_Product between $duoi AND $tren";
					}
					
					
				?>

			</aside>

			<aside class="list-cate">
				<ul class="homeproduct">
					<?php 
					
					$from = ($page -1 ) * $productInOnePage;
					
					$query = mysqli_query($db ,"SELECT * FROM product WHERE $xau LIMIT $from, $productInOnePage" );
					if($company=="" && $search=="" ){
						$query = mysqli_query($db ,"SELECT * FROM product $xau LIMIT $from, $productInOnePage" );
					}
					

					while($row = mysqli_fetch_array($query)){
						$name_Product=($row['name_Product']);
						?>
						<li >
							
							<a href="<?php echo "html/showProduct.php?name_Product=$name_Product" ?>" title= "<?php echo($row['name_Product'])?>" >
								<div class="absoluteimg wow bounceIn">
									<img src="<?php echo ($row['img'])?>"  alt="<?php echo($row['name_Product'])?>" class="img-product" width="180" height="180" style="display: block; opacity: 1;">
								</div>	
								<div class=name-product>
									<p><?php echo($row['name_Product'])?></p>
								</div>
								<strong style="color: red;"><?php echo"Giá: ".($row['price_Product'])." VND" ?></strong>
							</a>
						</li>

					<?php } ?>
					
				</ul>

			</aside>

		</div>

	</div>

	<div class="pager">


		<ul class="pagination">
			<?php

			if ($company==""&& $search==""){
				$query = mysqli_query($db ,"SELECT * FROM product WHERE $xau " );
				if($company=="" && $search=="" ){
					$query = mysqli_query($db ,"SELECT * FROM product $xau " );
				}
			}else if($company==""&& $search!=""){
				$query = mysqli_query($db ,"SELECT * FROM product WHERE $xau AND name_Product like '%".$search."%'" );
				if($company!="" && $search=="" ){
					$query = mysqli_query($db ,"SELECT * FROM product $xau AND company_Product='".$company."'" );
				}

			}
			


			$totalProduct = mysqli_num_rows($query);

			$numpage = ceil($totalProduct / $productInOnePage);

			for($p=1; $p<=$numpage; $p++){
				echo "<li><a href='index.php?company_Product=$company&search=$search&page=$p'>$p</a></li>";	
			}

			?>
		</ul>
	</div>
	<!--content-->

	<!--footer-->
	<footer class="footer">
		<p style="font-size: 14px;">Các thành viên cùng thực hiện:<br> Huỳnh Quang Nam <br> Huỳnh Văn Mỹ <br> Nguyễn Phước Tâm <br> Phạm Lành.</p>

	</footer>

	<!--footer-->

	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>
	<script src="vendor/js/jquery.min.js"></script>
	<script src="vendor/js/bootstrap.min.js"></script>


</body>
</html>