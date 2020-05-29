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
	$result = mysqli_query($db_con, "SELECT * FROM users WHERE username='".$usercheck."'");
	if (mysqli_num_rows($result)==1){
		$record= mysqli_fetch_array($result);
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