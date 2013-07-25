<?php
  include("verificalogin.php");

  ob_start();  
?>

<html>
	<head> 
    
    </head>
    
    <body>
		<div>
            <h5><?php echo 'Bem-vindo '.strtoupper($_SESSION['email']); ?></h5>  
            <a href="atualizardados.php" style="border:none; color: #000; text-decoration:none;"> atualizar dados </a>|
            <a href="logout.php" style="border:none; color: #000; text-decoration:none;"> sair </a>
		</div>
    </body>
    
</html>

<?php
  
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Pagina Principal";
  
  include("master.php");
?>

