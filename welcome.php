<?php session_start(); ?>
<html>
<title>Welcome!</title>
<head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1092495372629524481/VNybfXDy.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" href="TinkerNut.css">
</head>
<?php include("header.php");?>
<?php
$mypass = "pass";
$passcheck = $_POST["pass"];
if($passcheck == $mypass){
echo "Welcome,".$_POST["username"]."!You are now logged in.</br>";
$_SESSION['user'] = $_POST['username'];
$_SESSION['pass'] = $passcheck;
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