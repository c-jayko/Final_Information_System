<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','final') or die(mysqli_error($mysqli));
$id='';
$update = false;
$customer_id ="";
$firstname="";
$middlename="";
$lastname="";
$street="";
$barangay="";
$city="";
$contact="";


if(isset($_POST['save'])){
	$customer_id = $_POST['customer_id'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$street = $_POST['street'];
	$barangay = $_POST['barangay'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	

	$mysqli->query("INSERT INTO customer (customer_id,firstname,middlename,lastname,street,barangay,city,contact) VALUES ('$customer_id','$firstname','$middlename','$lastname','$street','$barangay','$city','$contact')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been Added to Customer List!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:cus_read.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM customer WHERE customer_id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted from Customer List!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:cus_delete.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM customer WHERE customer_id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$customer_id = $row['customer_id'];
		$firstname = $row['firstname'];
		$middlename = $row['middlename'];
		$lastname = $row['lastname'];
		$street = $row['street'];
		$barangay = $row['barangay'];
		$city = $row['city'];
		$contact = $row['contact'];
		
	}
}
if(isset($_POST['update'])){
	    $customer_id = $row['customer_id'];
		$firstname = $row['firstname'];
		$middlename = $row['middlename'];
		$lastname = $row['lastname'];
		$street = $row['street'];
		$barangay = $row['barangay'];
		$city = $row['city'];
		$contact = $row['contact'];
	
	$mysqli->query("UPDATE customer SET customer_id='$customer_id',firstname='$firstname',middlename='$middlename',lastname='$lastname',street='$street',barangay='$barangay',city='$city',contact='$contact' WHERE customer_id=$customer_id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated from Customer List!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:cus_update.php');
}


?>