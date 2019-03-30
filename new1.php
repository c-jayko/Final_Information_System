<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
	<style>
	body{
	background-image: url(images/jay.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	width: 100%;
	}
</style>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-dark bg-primary">
                <h1>AJ's Catering Service</h1>
                </nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="U" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="jaycoh"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="P"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit"/> 
								</p>
                                <p class="change_link">
									Already have an account?
									<a href="#toregister" class="to_register">Sign Up</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="sign.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="U">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="jaycoh" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="E" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="Jaycoh654@gmail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="P">Your password </label>
                                    <input id="passwordsignup" name="MD5" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>