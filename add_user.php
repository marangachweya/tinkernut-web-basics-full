<?php session_start();
include('config.php');?>
<html>
	<head>
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
		?>
		<?php include("footer.php"); ?>
</body>
</html>