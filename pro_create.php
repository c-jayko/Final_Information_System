<?php include('pro_process.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Create</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/style.css">
	<script type ="text/javascript" src = "Bootstrap/js/jquery-slim.min.js"></script>
	<script type ="text/javascript" src = "Bootstrap/js/popper.min.js"></script>
	<script type ="text/javascript" src = "Bootstrap/js/bootstrap.js"></script>
   </head>
<br><div class="text-center">
                <div class="header">
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>CREATE PRODUCT</h1></div>
  		</div>
<nav class="navbar navbar-expand-lg navbar-light bg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<a class="navbar-brand"></a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="home.php" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
    <div class="dropdown-menu">
	 <a class="dropdown-item" href="home.php">Home</a>
      <a class="dropdown-item" href="cus_create.php">Customer</a>
      <a class="dropdown-item" href="pro_create.php">Product</a>
	  <a class="dropdown-item" href="sales_invoice.php">Sales Invoice</a>
      <a class="dropdown-item" href="report.php">Report</a>
	   <a class="dropdown-item" href="about.php">About</a>
    </div>
  </li>
	   <td>
       <a href="pro_create.php" button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Create Product</a>
      </td>
	  <td>
       <a href="pro_read.php"><input type=button value="Read Product"></a>
      </td>
	  <td>
       <a href="pro_update.php"><input type=button value="Update Product"></a>
      </td>
	  <td>
       <a href="pro_delete.php"><input type=button value="Delete Product"></a>
      </td>
	</ul>
	
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
<br>
<center>
<div id="main">
  <div container>
   <div class="row justify-content-center">
	<form action="pro_process.php" method="POST">
	 <input type="hidden" name="product_code" value="<?php echo $product_code; ?>">
	  <b>Please Fill up Your Information:</b>
	    <div class="form-group col-md-4">
			<label>Product_code:</label>
			<input type="text" name="product_code" class="form-control" value="<?php echo $product_code;?>" required>
		</div>
		<div class="form-row">
          <div class="form-group col-md-4">
			<label>Description:</label>
			<input type="text" name="description" class="form-control" value="<?php echo $description;?>" required>
		  </div>
		  <div class="form-group col-md-4">
			<label>Price:</label>
			<input type="text" name="price" class="form-control" value="<?php echo $price;?>" required>
		  </div>
		  <div class="form-group col-md-4">
			<label>Unit:</label>
			<input type="text" name="unit" class="form-control" value="<?php echo $unit;?>" required>
		  </div>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">UPDATE</button>
		<a href="pro_read.php"class="btn">BACK</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">SAVE</button>
			<a href="pro_read.php"class="btn">BACK</a>
		<?php endif;?>
		</div>	
    </form>
   </div>
</div>
</center>
</body>
</html>
