<?php
session_start();
include('set_pass.php');
require 'connection.php';
	$sql = "SELECT sales.product_code, sales.sales_number, sales.quantity, sales.unit, sales.price
	FROM sales 
	JOIN invoice
	ON sales.sales_number = invoice.sales_number group by invoice.sales_number" ;
	$records=mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Create</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="Style/style.css">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap4.css"/>
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
   </head>
<br><div class="text-center">
                <div class="header">
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>---- SALES INVOICE ----</h1></div>
  		</div>
<nav class="navbar navbar-expand-lg navbar-light bg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<a class="navbar-brand"></a>
      <ul class="navbar-nav mr-auto">
    
	</ul>
	        <a href="home.php" button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Back</a>
               <a href="logout.php" button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Log Out</a>
    </ul>
	
  </div>
</nav>
<style>
	body{
	background-image: url(images/jay.JPG);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<body>

<center>
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped" id="person_list">
	<thead>
		<tr>
        <th>sales_number</th>
        <th>product_code</th>
		<th>Quantity</th>
        <th>Unit</th>		
		<th>Price</th>		
		<th>Function</th>
		<th>Action</th>
      </tr>
	</thead>
	<tbody>
	  <?php
      		while($information=mysqli_fetch_assoc($records)){
      		?>
			<tr>
			<td><?php echo $information['sales_number'];?></td>
			<td><?php echo $information['product_code']?></td>
			<td><?php echo $information['quantity']?></td>
			<td><?php echo $information['unit']?></td>
			<td><?php echo $information['price']?></td>
			<td><a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $information['customer_id']; ?>">Delete</i></a></td>
			<td><a class="btn btn-success btn-sm" href="edit.php?edit_id=<?php echo $information['customer_id']; ?>">Edit</i></a></td>
			</tr>
		<?php } ?>
		</tbody>
	  </table>
	  </div>
	  </center>
	  <script>
		$(document).ready( function () {
    $('#person_list').DataTable();
} );
	</script>
</body>
</html>