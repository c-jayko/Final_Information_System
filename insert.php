<?php include("connection.php");

$sales_number = $_POST['sales_number'];
$customer_id = $_POST['customer'];
$date = $_POST['date1'];
$terms = $_POST['terms'];
$product_code = $_POST['products'];
$quantity = $_POST['quantity'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$sql = "";
$sales = array();

$insert = "INSERT INTO invoice(sales_number,customer_id,date,terms) VALUES('$sales_number','$customer_id','$date','$terms')";
$res = mysqli_query($db, $insert);

for ($num = 0; $num < count($_POST['products']); $num++){
	$sales[]=$sales_number;
}
$i = 0;
while($i < count($_POST['products'])){
	$sales_number = mysqli_real_escape_string($db,$sales[$i]);
	$date = mysqli_real_escape_string($db,$date[$i]);
	$terms = mysqli_real_escape_string($db,$terms[$i]);
	$product_code = mysqli_real_escape_string($db,$product_code[$i]);
	$quantity = mysqli_real_escape_string($db,$quantity[$i]);
	$unit_price = mysqli_real_escape_string($db,$price[$i]);
	$unit = mysqli_real_escape_string($db,$unit[$i]);
	
	
	
	$sql = "INSERT INTO sales(product_code,sales_number,quantity,unit,unit_price) VALUES('$product_code','$sales_number',$quantity,'$unit',$unit_price)";
	mysqli_query($db,$sql);
	$i++;
}
if($sql == true){
	echo '<script> alert("Record has been Sucessfully Added to Sales List!"+$sql); window.location.href="sales_invoice.php";</script>';
}
	