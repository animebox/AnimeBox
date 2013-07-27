<?php
	class bancologin extends banco{
		
		#Funcao que busca o usuario no banco
		function BuscaUsuario($email)
		{
			$Sql = "SELECT * FROM USUARIO WHERE USUARIOEMAIL='".$email."'";
			$result = parent::Execute($Sql);
			return $result;
		}
	}
?>