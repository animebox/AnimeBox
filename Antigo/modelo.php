<?php
  include("verificalogin.php");
  ob_start();  
?>

/* Codigo HTML ou PHP */

<?php
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Inicio";
  include("master.php");
?>