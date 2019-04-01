<?php include("connection.php");
if(isset($_POST['customer'])){
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
for($i=0; $i<count($_POST['products']); $i++){
	$sales_number = mysqli_real_escape_string($db,$sales[$i]);
	$date = mysqli_real_escape_string($db,$date[$i]);
	$terms = mysqli_real_escape_string($db,$terms[$i]);
	$product_code = mysqli_real_escape_string($db,$product_code[$i]);
	$quantity = mysqli_real_escape_string($db,$quantity[$i]);
	$unit_price = mysqli_real_escape_string($db,$price[$i]);
	$unit = mysqli_real_escape_string($db,$unit[$i]);
	
	$sql .= "INSERT INTO sales(product_code,sales_number,quantity,unit,unit_price) VALUES('$product_code','$sales_number',$quantity,'$unit',$unit_price);";
}

if($sql != ""){
	if(mysqli_multi_query($db, $sql)){
		echo '<script> alert("Record has been Sucessfully Added to Sales List!"); window.location.href="sales_invoice.php";</script>';
	}else{
		echo 1;
	}
}
}
	