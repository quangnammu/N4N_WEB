<?php 
include('../php/connect.php');
$id = $_GET["id"];
$sql = "DELETE FROM product WHERE id_Product = $id";
mysqli_query($db , $sql);
header("location:Admin.php");
?>