<?php
	$msg = "";
	
	#Include nas funcoes do anime
	include('functions/banco-anime.php');
	
	#Instancia objeto que vai tratar o banco de dados dessa página
	$banco = new bancoanime;
	
	#Trabalha com Post
	if(isset($_POST["acao"]) && $_POST["acao"] != ''){
		$nome = strip_tags(trim(addslashes($_POST["nomeanime"])));
		
		if($nome != ""){
			#Verifica se já existe o anime cadastrado
			$existe = $banco->ANIMEJaExiste($nome);
			
			if($existe){
				$msg = "Anime ja cadastrado";
			}else{
				$banco->Cadastro($nome);
				$msg = "Anime cadastrado com sucesso!";
			}
		}else{
			$msg = "Favor preencher todos os campos!";
		}
	}
	
	#Imprime Valores
	$Conteudo = $banco->CarregaHtml('novoanime');
	$Conteudo = str_replace('<%MSG%>', $msg, $Conteudo);

?>