<?php
	#Aqui monta as páginas e imprime na tela
	
	session_start('login');
	include('functions/banco.php');
	include('tags.php');
	
	class controle{
		public function __construct(){
			
			$banco = new banco;
			//$banco->Conecta();
			
			$SaidaHtml = $banco->CarregaHtml('modelo');
			$Conteudo = $banco->CarregaHtml('login');
			$SaidaHtml = str_replace('<%CONTEUDO%>',$Conteudo,$SaidaHtml);
			$SaidaHtml = str_replace('<%URLPADRAO%>',UrlPadrao,$SaidaHtml);

			#Imprime tela
			echo utf8_encode($SaidaHtml);
			
		}
	}
?>