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
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>READ PRODUCT</h1></div>
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
      <a class="dropdown-item" href="create.php">Customer</a>
      <a class="dropdown-item" href="create1.php">Product</a>
	  <a class="dropdown-item" href="create3.php">Sales Invoice</a>
      <a class="dropdown-item" href="report.php">Report</a>
	   <a class="dropdown-item" href="about.php">About</a>
    </div>
  </li>
	  <td>
       <a href="pro_create.php"><input type=button value="Create Product"></a>
      </td>
	  <td>
       <a href="pro_read.php" button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Read Product List</a>
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

<div id="main">
 <div class="container">
  <center>
   
			
	<?php require_once 'pro_process.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		
		$result = $mysqli->query("SELECT * FROM product") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		<br><br>
			<table class="table">
			
				<thead>
					
					<tr>
						<th>Product_code:</th>
						<th>Description:</th>
						<th>Price:</th>
						<th>Unit:</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					<thead class="thead-light">
						<tr>
							<td><?php echo $row['product_code']?></td>
							<td><?php echo $row['description']?></td>
							<td>₱ <?php echo $row['price']?></td>
							<td><?php echo $row['unit']?></td>
						</tr>
					</thead>
						<?php endwhile;?>
			</table>
		</div>

		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>
    </div>
  </center>
 </div>
</div>
</body>
</html>