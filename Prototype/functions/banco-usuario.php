<?php
	class bancousuario extends banco{
		
		#Funчуo que busca o usuсrio no banco
		function BuscaUsuario($email)
		{
			$sql = "SELECT * FROM USUARIO WHERE USUARIOEMAIL='".$email."'";
			$result = parent::Execute($sql);
			return $result;
		}
		
		#Funчуo que verifica se jс existe o usuсrio
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
		
		#Funчуo que cadastra o usuсrio
		function Cadastro($email, $senha){
			$sql = "INSERT INTO USUARIO (USUARIOEMAIL, USUARIOSENHA) VALUES ('".$email."', '".$senha."')";
			parent::Execute($sql);
		}
	}
?>