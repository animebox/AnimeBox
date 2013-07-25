<?php
	
	include "conexao.php";
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$query = "INSERT INTO usuario (usuarioemail,usuariosenha) values ('".$email."','".$senha."')";
	
	$query = mysql_query($query) or die ("Houve um erro ao gravar os dados.");
	
	session_start();
	
	$_SESSION['usuario'] = $email;
	$_SESSION['senha'] = $senha;
	
	header("Location principal.php");
	
?>