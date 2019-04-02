 <?php

session_start();

if(isset($_POST['confirm'])){
$username = $_SESSION["new_pass"];
$currentpassword = md5($_POST['currentpassword']);
$newpassword = md5($_POST['newpassword']);
$confirmnewpassword = md5($POST['confirmnewpassword']);

/* make a connection with database */
$db = mysql_connect("localhost", "root","", "final") or die(mysql_error());

/* select the database */
mysql_select_db("final") or die(mysql_error());

$queryget = mysql_query("SELECT password FROM signin WHERE username='$username'") or 
die(mysql_error());
$row = mysql_fetch_assoc($queryget);
 $currentpasswordDB = $row['password'];

//check passwords

if ($currentpassword==$currentpasswordDB)

{
if ($newpassword==$confirmnewpassword)
{
//success, change password in DB
    $querychange = mysql_query("UPDATE signin SET password='$newpassword' WHERE username='$username'") or die(mysql_error());
}
else header("Location: update_password.php");

if ($querychange == true){

    $_SESSION["passchange"] = "Your password has been changed, Please Log in";

    header("Location:new1.php");

}

else $_SESSION["nopasschange"] = "Your password could not be changed, Please try again";
 header("Location:update_password.php");

}

else header("Location: update_password.php");

mysql_close($db);
}

?>