<?php
	class bancousuario extends banco{
		
		#Fun��o que busca o usu�rio no banco
		function BuscaUsuario($email)
		{
			$sql = "SELECT * FROM USUARIO WHERE USUARIOEMAIL='".$email."'";
			$result = parent::Execute($sql);
			return $result;
		}
		
		#Fun��o que verifica se j� existe o usu�rio
		function UsuarioJaExiste($email)
		{
			$sql = "SELECT * FROM USUARIO WHERE USUARIOEMAIL='".$email."'";
			$result = parent::Execute($sql);
			$num_rows = parent::Linha($result);
			if($num_rows){
				return true;
			}else{
				return false;
			}
		}
		
		#Fun��o que cadastra o usu�rio
		function Cadastro($email, $senha){
			$sql = "INSERT INTO USUARIO (USUARIOEMAIL, USUARIOSENHA) VALUES ('".$email."', '".$senha."')";
			parent::Execute($sql);
		}
	}
?>