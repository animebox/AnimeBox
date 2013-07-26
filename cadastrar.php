<?php
  ob_start();  
?>

<?php
	session_start();
	include "conexao.php";
	
	$email = $_POST['email'];
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	
	if((!isset($email) or $email == '') or (!isset($senha1) or $senha1 == '') or (!isset($senha2) or $senha2 == '')){
		$_SESSION['erro'] = 'Opss.. todos os campos são obrigatorios.';
		header("Location: novaconta.php");
	} else {
		if($senha1 != $senha2){
			$_SESSION['erro'] = 'Opss.. senhas diferentes.';
			header("Location: novaconta.php");
		} else {
			$query = "INSERT INTO usuario (usuarioemail,usuariosenha) values ('".$email."','".$senha1."')";			
			$query = mysql_query($query);
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha1;
			header("Location: principal.php");
		}
	}
	
?>