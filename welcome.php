<?php session_start(); 
include('config.php');?>
<html>
<title>Welcome!</title>
<head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1092495372629524481/VNybfXDy.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" href="TinkerNut.css">
</head>
<?php include("header.php");?>
<?php
$usercheck = $_POST ["username"];
$passcheck = $_POST["password"];
mysql_query("SELECT * FROM users WHERE username='$usercheck'");
if (mysql_num_rows($db_query)==1){
	$record= mysql_fetch_array($db_query);
if(md5($passcheck) == $record['password']){
echo "Welcome,".$usercheck."!You are now logged in.</br>";
$_SESSION['user'] = $usercheck;
$_SESSION['pass'] = $passcheck;
}
}
else
echo "<p class='sorry'>Sorry, wrong password</br>"
?>
<p class='welcome' id='greeting'>
Welcome<br/>
<a href="TinkerNut.php">Click here</a>&nbsp;to return to the main page</p>
<?php include("footer.php"); ?>
</body>
</html>