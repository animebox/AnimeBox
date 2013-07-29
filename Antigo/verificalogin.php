<?php 

	session_start();
	
	if (!isset($_SESSION['email']) OR ($_SESSION['email'] == '')){
		header('Location:index.php');	
	}
	
?>