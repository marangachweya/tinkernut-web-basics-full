<?php
include 'connection.php';
$sql = 'SELECT * FROM country';
$results = mysqli_query($sql);
  require_once 'connection.php';

  $sql= 'SELECT * FROM country';
  $results = mysqli_query($con, $sql); # add connection string to query 
$db_con= mysql_connect("localhost", "root", "pass", "my_data");
if (!$db_con){
 die ('Could not connect'. mysql_error());
}
mysql_select_db("my_data", $db_con);
?>