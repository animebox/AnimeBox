<?php
	class bancoanime extends banco{
		
		#Função que busca o anime no banco
		function BuscaAnime($nome)
		{
			$sql = "SELECT * FROM ANIME WHERE ANIMENOME='".$nome."'";
			$result = parent::Execute($sql);
			return $result;
		}
		
		function BuscaListaAnime()
		{
			$sql = "SELECT ANIMECOD,ANIMENOME FROM ANIME";
			$result = parent::Execute($sql);
			return $result;
		}
		
		#Função que verifica se já existe o anime
		function ANIMEJaExiste($nome)
		{
			$sql = "SELECT * FROM ANIME WHERE ANIMENOME='".$nome."'";
			$result = parent::Execute($sql);
			$num_rows = parent::Linha($result);
			if($num_rows){
				return true;
			}else{
				return false;
			}
		}
		
		#Função que cadastra o anime
		function Cadastro($nome){
			$sql = "INSERT INTO ANIME (ANIMENOME) VALUES ('".$nome."')";
			parent::Execute($sql);
		}
	}
?>