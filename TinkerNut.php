<?php session_start(); 
include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tinkernut Foundation</title>
    <!--Icon-->
    <link rel="icon" href="https://pbs.twimg.com/profile_images/1092495372629524481/VNybfXDy.jpg" type="image/jpg" sizes="16x16">
   
       <!--CSS-->
       <link rel="stylesheet" href="TinkerNut.css">
	     <!--JS-->
    <script src="TinkerNut.js"></script>
    <!--Fontawsome-->
    <script src="https://kit.fontawesome.com/1b71093802.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include("header.php");?>
<?php
if (isset($_SESSION['user'])){
	echo "<center>
	<p class='welcome' id='greeting'>Add User:</p>
	<form action='add_user.php' method='post' onSubmit='return clicked()'>
	<b id='errorMsg'>Name:</b><input type='text' id='nameCheck' name='addusername'/>
	<br><label><b>Password:</b></label><input type='password' id='password' name='addpassword'/><br>
	<input type='submit' value='Add'/>
	</form>
	</center>";

	$db_query = mysqli_query($db_con,"SELECT * FROM users ");
	echo"<center><h1>User List</h1><table border='1'>
	<tr>
	<td><b>User ID</b></td>
	<td><b>Username</b></td>
	</tr>";
	while($record = mysqli_fetch_array($db_query)){
		echo "<td>".$record['id']."</td>";
		echo "<td>".$record['username']."</td>";
		echo "</tr>";
		echo "</table>
		</center>";
	}	
}
else 		echo "<center><form action='welcome.php'>
		<p class='welcome' id='greeting'>Please Login:</p>
		<form action='add_user.php' method='post' onSubmit='return clicked()'>
		<b id='errorMsg'>Name:</b><input type='text' id='nameCheck' name='username'/>
		<br><label><b>Password:</b></label><input type='password' id='password' name='password'/><br>
		<input type='submit' value='Login'/>
		</form>
		</center>";
?>
<?php if (isset($_SESSION['user']))
echo "<center><a href='logout.php'>Logout</a></center>"
?>
<p class="content">This is a work in progress that will eventually show places for data input, as well as data<br>recall. Check back here for updates and more information! Thanks for visiting!</p>
<?php include("footer.php"); ?>
</div>
</body>
</html>