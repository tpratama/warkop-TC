<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['iduser']);
	unset($_SESSION['lokasi']);
	unset($_SESSION['privilege']);
	unset($_SESSION['timeout']);
	session_destroy();
	header("Location:index.php");
?>