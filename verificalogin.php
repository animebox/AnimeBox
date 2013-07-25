<?php 

	session_start();
	if (!isset($_SESSION['email']) and (!$_SESSION['email'] == '')){
		header('Location:index.php');	
	}
	
?>