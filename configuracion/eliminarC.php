<?php
	include("../template/head.php");
	echo "Eliminar Cliente";
	include("../template/contenido.php");
	?>
	
	<?php
include("conexion.php");
$eli=$_POST['eli'];
    
     $consulta ="DELETE  FROM factura WHERE cod_cliente='$eli'";
                                 
    $resultado=mysql_query($consulta,$con);
   echo "Codigo'.$eli.'  Eliminado";

   
			?>
<a href="../factura/eliminar.php" class="btn btn-large btn-success" role="button">Atras</a></center>
	

		<?php
  include("../template/footer.php");?>