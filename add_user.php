<?php session_start();
include('config.php');?>
<html>
	<head>
	       <link rel="stylesheet" href="TinkerNut.css">
		<title> Add User </title>
	</head>
	<body>
		<?php include("header.php");?>
		<?php
			$db_query="INSERT INTO users (username,password) VALUES ('".$_POST['addusername']."','".md5($_POST['addpassword'])."')";
			
			if (!mysqli_query($db_con, $db_query)){
				die ("Error:".mysqli_error($db_con));
			}
			echo "User Added";
			echo"<p class='welcome' id='greeting'><a href='TinkerNut.php'>Click here</a>&nbsp;to return to the main page</p>";
		?>
		<?php include("footer.php"); ?>
</body>
</html>