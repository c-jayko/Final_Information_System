<?php include("connection.php");

$sales_number = $_POST['sales_number'];
$customer_id = $_POST['customer_id'];
$date = $_POST['date'];
$terms = $_POST['terms'];
$product_code = $_POST['product_code'];
$quantity = $_POST['quantity'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$sql = "";
$sales = array();

$insert = "INSERT INTO invoice(sales_number,customer_id,date,terms) VALUES($sales_number,'$customer_id','$date','$terms')";
$res = mysqli_query($db, $insert);

$select = "SELECT sales_number FROM invoice ORDER BY sales_number DESC LIMIT 1";
$res1 = mysqli_query($db, $select);
$row = mysqli_fetch_array($res1);

for ($num = 0; $num < count($_POST['product']); $num++){
	$sales[]=$row['sales_number'];
}
$i = 0;
while($i < count($_POST['products'])){
	$sales_number = mysqli_real_escape_string($db,$sales_number[$i]);
	$customer_id= mysqli_real_escape_string($db,$customer_id[$i]);
	$date = mysqli_real_escape_string($db,$date[$i]);
	$terms = mysqli_real_escape_string($db,$terms[$i]);
	$quantity = mysqli_real_escape_string($db,$quantity[$i]);
	$price = mysqli_real_escape_string($db,$price[$i]);
	$unit = mysqli_real_escape_string($db,$unit[$i]);
	
	
	
	$sql = "INSERT INTO sales(product_code,sales_number,quantity,unit,price) VALUES('$product_code','$sales_number',$customer_id,$quantity,'$unit',$price)";
	mysqli_query($db,$sql);
	$i++;
}
if($sql == true){
	echo '<script> alert("Record has been Sucessfully Added to Sales List!"); window.location.href="salesinvoice.php";</script>';
}
	