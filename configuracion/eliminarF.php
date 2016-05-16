<?php
	include("../template/head.php");
	echo "Eliminar Cliente";
	include("../template/contenido.php");
	?>

	<?php
include("conexion.php");
$eli=$_POST['eli'];
    
     $consulta ="DELETE  FROM cliente WHERE cod_cliente='$eli'";
    $resultado=mysql_query($consulta,$con);
   echo "Codigo'.$eli.'  Eliminado";
   
			?>
		

		<?php
  include("../template/footer.php");?>