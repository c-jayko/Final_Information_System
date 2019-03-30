<?php
	include('connection.php');
	
	$sql= "SELECT * FROM customer";
	$result = mysqli_query($db, $sql);
	

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
    <body>
       <div class="container">
		<form method="POST" action="insert.php">
		<div class="row">
			<div class="col-sm-3">
		<center><label>Customer_Id:</label></center>
		<select name="customer" required class="form-control">
		<?php 
			if(mysqli_num_rows($result)){
				while($row = mysqli_fetch_array($result)){
		?>
		
		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['firstname'].' '.$row['lastname'] ?></option>
			<?php }} ?>
		</select>
		</div>
		<div class="col-sm-3">
				<label>Sales_number:</label>
			<input type="text" name="sales_number" equired class="form-control" placeholder="sales_number" required>
			</div>
		<div class="col-sm-3">
				<label>Date:</label>
			<input type="date" name="date1" equired class="form-control" placeholder="Enter date" required>
			</div>
		<div class="col-sm-3">
		<div class="row">
			<label>Terms:</label>
					<select name="terms" required class="form-control">
						<option value="Cash On Delivery">Cash On Delivery</option>
						<option value="Cash">Cash</option>
						<option value="Credit">Credit</option>
						<option value="Cash">Paypal</option>
						<option value="Credit">Landbank</option>
						<option value="Credit">Palawan</option>
					</select>
		</div>
	</div>
		<div class="col-sm-3">	
		<div class="row">
			<label>Product_code:</label>
			    <select name="products" id="products" required class="form-control">
			        <?php 
			        $query = "SELECT * FROM product";
			        $result1 = mysqli_query($db, $query);
			        if(mysqli_num_rows($result1)){
				    while($row = mysqli_fetch_array($result1)){
		            ?>
		
		              <option value="<?php echo $row['product_code']; ?>"><?php echo $row['description'];?></option>
		
			        <?php }} ?>
		        </select>
		</div>
	    </div>
		</th>
	</div>
	
		<br>
			<div class="table-responsive">
			<table id="invoice-item-table" class="table table-bordered table-sm">
									<tr>
										<th>Product_code:</th>
										<th>Quantity</th>
										<th>Unit</th>
 										<th>Unit_Price</th>
										<th><button type="button" name="add_row" id="add_row" class="btn btn-primary btn-sm btn-xs">+ Add Items </button></th>
									</tr>
									<tr>
										<td><input type="text" name="products[]" id="product_code1" class="form-control form-control-sm input-sm barcode" placeholder="product_code"/ required></td>
										<td><input type="number" min="1" name="quantity[]" id="quantity1" data-srno="1" class="form-control form-control-sm input-sm quantity" placeholder="Quantity" /required></td>
										<td><input type="text" name="unit[]" id="unit1" data-srno="1" class="form-control form-control-sm  input-sm unit"  placeholder="Unit"required></td>
										<td><input type="number" step="0001.00" min="0000.00" name="price[]" id="price1" data-srno="1" class="form-control form-control-sm input-sm price" placeholder="Price" /required></td>
									</tr>								
								</table>
								<center>
							    <div class="col-sm-3">
								<input type="submit" name="create_delivery" value="---- BUY ----" id="create_delivery" class="btn btn-sm btn-info mr-5"/required>
								</center>
								
				</div>
				</form>
				<script>
				$(document).ready(function(){

	var final_total_amount = $('#final_total_amount').text();
	var count = 1;
	$(document).on('change','#products', function(){
		load(count);
	});
	$(document).on('click','#add_row', function(){
		count += 1;
		$('#quantity').val(count);

		var html_code = ''; 
		html_code += '<tr id="row_id_'+count+'">';
		html_code += '<td><input type="text" name="products[]" id="product_code'+count+'" class="form-control form-control-sm input-sm product_code" placeholder="product_code"/></td>';
		html_code += '<td><input type="number" name="quantity[]" min="1" id="quantity'+count+'" data-srno="'+count+'" placeholder="Quantity"  class="form-control form-control-sm nput-sm quantity" /></td>';
		html_code += '<td><input type="text" name="unit[]" pattern="[A-Za-z]+" title="unit" id="unit'+count+'" placeholder="Unit" data-srno="'+count+'" class="form-control form-control-sm input-sm unit"></td>';
		html_code += '<td><input type="number" name="price[]" min="0000.00" step="0000.00" placeholder="price" id="price'+count+'" data-srno="'+count+'" class="form-control form-control-sm input-sm Price"></td>';
		html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-sm btn-danger btn-xs remove_row">Remove</button></td></tr>';
		$("#invoice-item-table").append(html_code);
		$(document).on('change','#products', function(){
			load(count);
			
	});
			
	});
	function load($count){
				var product =  $('#products').val();
		$.ajax({
			url : "load.php",
			method: "POST",
			dataType: "json",
			data: {product:product},
			success : function(data){
				for(x in data){
						$('#product_code'+count).val(data.product_code);
						$('#price'+count).val(data.price);
						$('#unit'+count).val(data.unit);
					}
			}
		});
	}
	$(document).on('click','.remove_row',function(){
		var row_id = $(this).attr("id");
				$('#row_id_'+row_id).remove();
		count -= 1;
	});


});</script>
    </body>
</html>