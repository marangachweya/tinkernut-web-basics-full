<?php

$db_con= mysqli_connect("localhost", "root", "pass", "my_data");

if (!$db_con){
 die ('Could not connect'. mysqli_error());
}

#mysqli_select_db("my_data", $db_con);

$sql = 'SELECT * FROM country';
$results = mysqli_query($db_con, $sql);

  $sql= 'SELECT * FROM country';
  $results = mysqli_query($db_con, $sql); # add connection string to query 

?>
<?php include("link.php")?>