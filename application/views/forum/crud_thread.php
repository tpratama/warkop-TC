<?php
		$username = "root";
		$password = "";
		$hostname = "localhost"; 

		//connection to the database
		$dbhandle = mysql_connect($hostname, $username, $password) 
		 or die("Unable to connect to MySQL");

		//select a database to work with
		$selected = mysql_select_db("forumLP2",$dbhandle) 
		  or die("Could not select examples");
		
		session_start();	  
?>

<?php

require 'db_connect.php';

$thread_id=$_GET['abc'];
$konten = $_POST["comment"];
$dateCreated = date("yyyy-mm-dd");
$dateEdited = date("yyyy-mm-dd");

$sql = "INSERT INTO post(ID_THREAD,DATE_P_CREATED,LAST_EDIT,KONTEN,ID_USER) VALUES($thread_id,$dateCreated,$dateEdited ,'$konten',1)";

$result = mysql_query($sql);
// Check User
if ($result)
{
	echo "post anda telah di post<br>";
	echo $konten;
	header("Location:thread.php?title=$thread_id"); 
	//$_SESSION['lol']=$thread_id;
}

else
{
	mysql_error();
	echo "post gagal ditampilkan";
}
//CleanUpDB();

?>