<?php

  include("verificalogin.php");

  ob_start();
  
?>

<div >
    <form class="formEntrar">
        Usuario <input type='text' id='email' name='email' class="formEntrarCampos"/><br /><br />
        Senha <input type='text' id='senha' name='senha' class="formEntrarCampos"/><br /><br />
        <input type="submit"  value='Entrar' class="formEntrarBotao"/>
	</form>	
</div>

<?php
  
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Inicio";
  
  include("master.php");
?>

