<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','final') or die(mysqli_error($mysqli));

$product_code='';
$update = false;
$product_code="";
$description="";
$price="";
$unit="";



if(isset($_POST['save'])){
	$product_code = $_POST['product_code'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$unit = $_POST['unit'];
	

	$mysqli->query("INSERT INTO product (product_code,description,price,unit) VALUES ('$product_code','$description','$price','$unit')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been Added to Product List!";
	$_SESSION['msg_type'] = "success";
	
	header("location:read1.php");
}
if(isset($_GET['delete'])){
	$product_code =$_GET['delete'];
	$mysqli->query("DELETE FROM product WHERE product_code=$product_code") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted from Product List!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:read1.php");
	
	
}
if(isset($_GET['edit'])){
	$product_code = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM product WHERE product_code=$product_code") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$product_code = $row['product_code'];
		$description = $row['description'];
		$price = $row['price'];
		$unit = $row['unit'];
		
	}
}
if(isset($_POST['update'])){
	    $product_code = $_POST['product_code'];
		$description = $row['description'];
		$price = $row['price'];
		$unit = $row['unit'];
		
	
	$mysqli->query("UPDATE product SET product_code='$product_code',description='$description',price='$price',unit='$unit' WHERE pro_code=$pro_code") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated from Product List!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:read1.php');
}


?>