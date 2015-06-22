<?php
$servername = "localhost";
$db_name="forumlp2";
$db_user = "root";
$db_pass = "";

// Create connection
//function GetConnection () {
$conn = mysql_connect($servername, $db_user, $db_pass);
mysql_select_db($db_name,$conn) or die('Could not select database.')
//Check connection
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
//return $conn;
//}

 ?>
