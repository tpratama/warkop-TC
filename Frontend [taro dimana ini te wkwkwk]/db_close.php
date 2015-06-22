<?php

function CleanUpDB()
{
	global $conn;
	if($conn!=false)
		mysql_close($conn);
	$conn=false;
		}
	
?>