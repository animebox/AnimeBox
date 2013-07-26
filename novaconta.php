<?php
  ob_start();  
?>

<div >
<form action="cadastrar.php" method="post" class="formEntrar" />
	<?php    
		session_start();
        if(isset($_SESSION['erro'])){
            echo $_SESSION['erro']."<br><br>";   
            unset($_SESSION['erro']);
        }    
    ?>
	E-mail <input type="text" id="email" name="email" class="formEntrarCampos"/><br /><br />
    Senha <input type="password" id="senha1" name="senha1" class="formEntrarCampos"/><br /><br />
    Repita a Senha <input type="password" id="senha2" name="senha2" class="formEntrarCampos"/><br /><br />
    <input type="submit"  value='Registre-se' class="Botao"/>
</form>
</div>
<?php
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Inicio";
  include("master.php");
?>