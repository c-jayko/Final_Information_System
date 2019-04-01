<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="Style/style.css">
    </head>
	<style>
	body{
	background-image: url(images/jay.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
<?php include('server_pass.php') ?>
    <body>
	<center>
	<br>
        <div class="container">
            <header>
                <nav class="navbar navbar-dark bg-primary">
				<label class="text-light">Log In to AJ's Catering Service</label><br>
                </nav>
            </header>
            <section><br>		 
  <form method="post" action="check_login.php">
  	<?php include('error_pass.php'); ?>
		<div class="form-row w-25 pl-3 pr-3 bg-info" style="border:1px solid black;border-radius:20px;">
		<div class="col-md-12">
		<br>
  		<label class="text-light">Username</label><br>
  		<input  type="text" class="form-control" placeholder="Enter Username" name="username" >
		<br>
  		<label class="text-light">Password</label><br>
  		<input type="password"  class="form-control" placeholder="Enter Password" name="password"><br>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		<!--Not yet a member? <a href="registration.php">Sign up</a> -->
  	</p></div>
  </form>
  </center>
</body>
</html>
      