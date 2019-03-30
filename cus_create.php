<?php include('cus_process.php');?>

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
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>CREATE CUSTOMER</h1></div>
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
       <a href="cus_create.php" button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Create Customer</a>
      </td>
	  <td>
       <a href="cus_read.php"><input type=button value="Read Customer"></a>
      </td>
	  <td>
       <a href="cus_update.php"><input type=button value="Update Customer"></a>
      </td>
	  <td>
       <a href="cus_delete.php"><input type=button value="Delete Customer"></a>
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
<center>
<div id="main">
  <div container>
   <div class="row justify-content-center">
	<form action="cus_process.php" method="POST">
	 <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
	  <b>Please Fill up Your Information:</b>
	    <div class="form-group col-md-4">
			<label>Customer_Id:</label>
			<input type="text" name="customer_id" class="form-control" value="<?php echo $customer_id;?>" required>
		</div>
		<b>Your Full name</b>
		<div class="form-row">
          <div class="form-group col-md-4">
			<label>First name:</label>
			<input type="text" name="firstname" class="form-control" value="<?php echo $firstname;?>" required>
		  </div>
		  <div class="form-group col-md-4">
			<label>Middle name:</label>
			<input type="text" name="middlename" class="form-control" value="<?php echo $middlename;?>" required>
		  </div>
		  <div class="form-group col-md-4">
			<label>Last name:</label>
			<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>" required>
		  </div>
		</div>
		<b>Your Address</b>
		<div class="form-row">
          <div class="form-group col-md-4">
			<label>Customer Street:</label>
			<input type="text" name="street" class="form-control" value="<?php echo $street;?>" required>
		  </div>
		  <div class="form-group col-md-4">
			<label>Barangay:</label>
			<input type="text" name="barangay" class="form-control" value="<?php echo $barangay;?>" required>
		  </div>
		  <div class="form-group col-md-4">
			<label>City:</label>
			<input type="text" name="city" class="form-control" value="<?php echo $city;?>" required>
		  </div>
		</div>
		<div class="form-group col-md-4">
			<label>Contact number:</label>
			<input type="text" name="contact" class="form-control" value="<?php echo $contact;?>" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">UPDATE</button>
		<a href="cus_read.php"class="btn">BACK</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">SAVE</button>
			<a href="cus_read.php"class="btn">BACK</a>
		<?php endif;?>
		</div>	
    </form>
   </div>
</div>
</center>
</body>
</html>
