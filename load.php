<?php
	include('connection.php');

		$name = mysqli_real_escape_string($db,$_POST['product']);
		$show 	= "SELECT * FROM product WHERE product_code='$name' ";
		$query 	= mysqli_query($db,$show);

	$row = json_encode(mysqli_fetch_assoc($query));
	echo $row;
?>
