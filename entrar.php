<?php

	include "conexao.php";
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$query = "SELECT usuarioemail,usuariosenha FROM usuario where usuarioemail = '".$email."' and usuariosenha = '".$senha."'";
	
	$sql = mysql_query($query);
	
	if(mysql_num_rows($sql) == 0){
		echo "usuario ou senha invalido(s)";
	} else {
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header("Location: principal.php");
	}
?>