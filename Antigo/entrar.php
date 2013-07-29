<?php
  ob_start();  
?>

<?php

	session_start();
	include "conexao.php";
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$query = "SELECT usuarioemail,usuariosenha FROM usuario where usuarioemail = '".$email."' and usuariosenha = '".$senha."'";
	
	$sql = mysql_query($query);
	
	if(mysql_num_rows($sql) == 0){
		$_SESSION['erro'] = 'usuario ou senha invalido(s).';
		header("Location: index.php");
	} else {
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header("Location: principal.php");
	}
?>

<?php
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Inicio";
  include("master.php");
?>