<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','final') or die(mysqli_error($mysqli));

$id='';
$update = false;
$sales_number="";
$quantity="";
$unit="";
$unit_price="";




if(isset($_POST['save'])){
	$id = $_POST['product_id'];
	$sales_number = $_POST['sales_number'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$unit_price = $_POST['unit_price'];


	$mysqli->query("INSERT INTO sales (id,sales_number,quality,unit,unit_price) VALUES ('id','$sales_number','$quantity','$unit','$unit_price')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been Added to Product List!";
	$_SESSION['msg_type'] = "success";
	
	header("location:create3.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM sales WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been canceled from Product order!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:create3.php");
	
	
}
if(isset($_GET['edit'])){
	$pid = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM sales WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$sales_number = $_POST['sales_number'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$unit_price = $_POST['unit_price'];
		
	}
}
if(isset($_POST['update'])){
	    $id = $_POST['id'];
	    $sales_number = $_POST['sales_number'];
		$quantity = $_POST['quantity'];
		$unit = $_POST['unit'];
		$unit_price = $_POST['unit_price'];
		
		
	
	$mysqli->query("UPDATE sales SET id='$id', sales_number='$sales_number', quantity='$quantity', unit='$unit', unit_price='$unit_price' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated from Product List!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:create3.php');
}


?>