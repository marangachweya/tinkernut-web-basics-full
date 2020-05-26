<?php session_start();
session_destroy();?>
<html>
<title>Bye!</title>
<head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1092495372629524481/VNybfXDy.jpg" type="image/jpg" sizes="16x16">
<link rel="stylesheet" href="TinkerNut.css">
</head>
<body>
<?php include("header.php");?>
<p class="welcome" id="greeting">
You are now logged out
</p>
<?php include("footer.php"); ?>
</body>
</html>