<?php
	class bancoanime extends banco{
		
		#Função que busca o anime no banco
		function BuscaAnime($id)
		{
			$sql = "SELECT * FROM ANIME WHERE ANIMECOD='".$id."'";
			$result = parent::Execute($sql);
			return $result;
		}
		
		function ListaAnime($itens)
		{
			$sql = "SELECT * FROM ANIME";
			$result = parent::Execute($sql);
			$num_rows = parent::Linha($result);
		
			#Monta no Html a Listagem
			if ($num_rows){
				while( $rs = mysql_fetch_array($result , MYSQL_ASSOC) )
				{
					$linha = $itens;
					$linha = str_replace('<%ANIMENOME%>',$rs['ANIMENOME'],$linha);
					$linha = str_replace('<%GENERO%>', "GENERO",$linha);
					$linha = str_replace('<%ANIMECOD%>',$rs['ANIMECOD'],$linha);
					$animes .= $linha;
				}
			}
			return $animes;
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
		
		#Fun��o que cadastra o anime
		function Cadastro($nome){
			$sql = "INSERT INTO ANIME (ANIMENOME) VALUES ('".$nome."')";
			parent::Execute($sql);
		}
		
		#Fun��o que atualiza o anome
		function Atualiza($nome, $id){
			$sql = "UPDATE ANIME SET ANIMENOME = '".$nome."' WHERE ANIMECOD = '".$id."' ";
			parent::Execute($sql);
		}
	}
?>