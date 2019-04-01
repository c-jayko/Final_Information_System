<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="Style/style.css">
</head>
<br>
<body class="">
  <div class="text-center">
                <div class="header">
    		 <div class="p-3 mb-2 bg-primary text-white"><h1>----- CHANGE PASSWORD -----</h1></div>
  		</div><br>
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
	background-image: url(images/jay.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<center>		 
  <form method="post" action="change_pass.php">
		<div class="form-row w-25 pl-3 pr-3 bg-white" style="border:1px solid black;border-radius:20px;">
		<div class="col-md-12">
		<br>
  		<label class="text-primary">Enter Current Password</label><br>
  		<input  type="password" class="form-control" placeholder="Enter Current Password" name="password1" required>
		<br>
  		<label class="text-primary">Enter New Password</label><br>
  		<input type="password"  class="form-control" placeholder="Enter New Password" name="password2" required>
		<br>
		<label class="text-primary">Confirm New Password</label><br>
  		<input type="password"  class="form-control" placeholder="Confirm Password" name="password3" required><br>
  		<button type="submit" class="btn btn-primary" name="confirm">Submit</button>
		<a href="home.php" class="btn btn-info" >Cancel</a>
  	</div>
  	<p>
  		<!--Not yet a member? <a href="registration.php">Sign up</a> -->
  	</p></div>
  </form>
</center>
</body>
</html>