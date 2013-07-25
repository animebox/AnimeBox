<?php 
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "467904";
	$nomedb = "tosodb";
	$conexao = mysql_connect($servidor,$usuario,$senha) or die ("Erro ao conectar ao servidor.");
	$database = mysql_select_db($nomedb) or die ("Erro ao conectar ao banco de dados.");
	
?>