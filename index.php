<?php
  include("verificaloginindex.php");
  ob_start();
?>

<div >
    <form class="formEntrar" action="entrar.php" method="post">
    	<?php    
			if(isset($_SESSION['erro'])){
				echo $_SESSION['erro']."<br><br>";   
				unset($_SESSION['erro']);
   			}    
		?>
        Usuario <input type='text' id='email' name='email' class="formEntrarCampos"/><br /><br />
        Senha <input type='password' id='senha' name='senha' class="formEntrarCampos"/><br /><br />
        <input type="submit"  value='Entrar' class="Botao"/><br /><br />
        não possui uma conta? <a href="novaconta.php" style="border:none; color:#333;">clique aqui!</a>
	</form>	
</div>

<?php
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Inicio";
  include("master.php");
?>

