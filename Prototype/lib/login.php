<?php
	$msg = " ";

	#Include nas funcoes do cliente
	include('functions/banco-login.php');
	
	#Instancia objeto que vai tratar o banco de dados dessa pagina
	$banco = new bancologin;
	
	#Trabalha com Post
	if(isset($_POST["acao"]) && $_POST["acao"] != ''){
		$email = strip_tags(trim(addslashes($_POST["email"])));
		$senha = strip_tags(trim(addslashes($_POST["senha"])));
		
		#Busca Usuario no banco e verifica se ele existe
		$result = $banco->BuscaUsuario($email);
		$num_rows = $banco->Linha($result);
		$rs = mysql_fetch_array($result , MYSQL_ASSOC);
		if(!$num_rows) {
			$msg = '<div class="alert alert-error">
             			<button type="button" class="close" data-dismiss="alert">×</button>
              			<strong>Erro!</strong> Login ou senha inválidos.
            		</div>';
		}else if($senha === $rs['USUARIOSENHA']){
			$banco->RedirecionaPara('principal');
		}else{
			$msg = MsgErro_Senha;
		}
	}
	
	#Imprime Valores
	$Conteudo = $banco->CarregaHtml('login');
	$Conteudo = str_replace('<%MSG%>',$msg,$Conteudo);

?>