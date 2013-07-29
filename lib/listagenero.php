<?php

	#Include nas funcoes do genero
	include('functions/banco-genero.php');
	
	#Instancia objeto que vai tratar o banco de dados dessa página
	$banco = new bancogenero;
	
	$result = $banco->BuscaListaGenero();
	
	while($linha = mysql_fetch_array($result, MYSQL_ASSOC)){			
		$msg = $msg."<br/>".$linha["GENERONOME"];
	}
	
	#Imprime Valores
	$Conteudo = $banco->CarregaHtml('listagenero');
	$Conteudo = str_replace('<%MSG%>', $msg, $Conteudo);

?>