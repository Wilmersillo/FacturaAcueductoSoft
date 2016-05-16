<?php
	include("../template/head.php");
	echo "Consultar Cliente";
	include("../template/contenido.php");
	?>






<?php error_reporting(0);
include("conexion.php");

$cod=$_POST['cod'];
$codn=$_POST['codn'];
$nomn=$_POST['nomn'];
$apen=$_POST['apen'];

if ($cod==$codn){
	if(empty($cod and empty($nomn))){


$consulta="SELECT * FROM empleado";



$consulta =("UPDATE empleado SET cod='$codn',nom='$nomn'  WHERE cod='$cod'");
 $resultado=mysql_query($consulta,$con);
echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../usuario/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';

}

	if(empty($cod and empty($apen))){

$consulta =("UPDATE empleado SET cod='$codn',ape='$apen'  WHERE cod='$cod'");
 $resultado=mysql_query($consulta,$con);
 echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../usuario/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';


}

}else  {

	echo "<span style='font-weight:bold;color:red;'>Los codigos no coinsiden, intentelo nuevamente.</span>";
	header('Location: ../usuario/modificar.php ');
	echo'<a href="../usuario/modificar.php" class="btn btn-large btn-danger" role="button">Atras</a></center>';

}



?>


		<?php
  include("../template/footer.php");?>