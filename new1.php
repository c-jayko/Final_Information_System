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
	<br><br><br><br>
        <div class="container">
            <header>
			<div class="form-group col-md-4">
                <nav class="navbar navbar-dark bg-primary">
				<center><label class="text-light">----- * Log In to AJ's Catering Service * -----</label></center><br>
                </nav>
			</div>
            </header>
            <section><br>		 
  <form method="post" action="check_login.php">
  	<?php include('error_pass.php'); ?>
		<div class="form-row w-25 pl-4 pr-4" style="border:1px solid black;">
		<div class="col-md-12">
		<br>
  		<label class="text-dark">Username</label><br>
  		<input  type="text" class="form-control" placeholder="Enter Username" name="username" >
		<br>
  		<label class="text-dark">Password</label><br>
  		<input type="password"  class="form-control" placeholder="Enter Password" name="password"><br>
  		<button type="submit" class="btn btn-primary" name="login_user">Login</button>
  	</div>
  	<p>
  		Are you a Member ? <a href="new1.php">Sign up</a>
  	</p></div>
  </form>
  </center>
</body>
</html>
      