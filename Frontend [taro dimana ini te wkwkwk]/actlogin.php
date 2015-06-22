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
	
	$mdpassword = $_POST['password'];
	
	//execute the SQL query and return records
	$result = mysql_query("SELECT count(*) AS TOTAL from user WHERE NAMA_USER='$_POST[username]' AND PASS_USER='$mdpassword'");

	$row = mysql_fetch_array($result);
	/*
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
	   echo "ID:".$row{'id'}." Name:".$row{'model'}."Year: ". //display the results
	   $row{'year'}."<br>";
	}
	//close the connection
	mysql_close($dbhandle);
	
	$sql_count = "SELECT count(*) AS TOTAL from kodeunit WHERE kdunit='$_POST[username]' AND password='$mdpassword'";
	$counts = sqlsrv_query( $db, $sql_count );
	$count = sqlsrv_fetch_array( $counts, SQLSRV_FETCH_ASSOC);
	*/
	if($row['TOTAL']==0 || ($_POST['username']=="" && $_POST['password']==""))
	{
		echo $row['TOTAL'];
		//sqlsrv_free_stmt($counts);
		//header("Location:login.php?status=false");
	}
	else
	{
		$query = mysql_query("SELECT * from user WHERE NAMA_USER='$_POST[username]' AND PASS_USER='$mdpassword'");
		session_start();
		while ($row = mysql_fetch_array($query)) 
		{		 
			$_SESSION['username'] = $row['NAMA_USER'];
			$_SESSION['password'] = $row['PASS_USER'];
			$_SESSION['iduser'] = $row['ID_USER'];
			$_SESSION['lokasi'] = $row['LOKASI'];
			$_SESSION['privilege'] = $row['PRIVILEGE'];
			$_SESSION['timeout'] = time();
		}
		
		header("Location:about-us.php");
	}
?>