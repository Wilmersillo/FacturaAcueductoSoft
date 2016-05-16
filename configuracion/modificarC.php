<?php
	include("../template/head.php");
	echo "Consultar Cliente";
	include("../template/contenido.php");
	?>






<?php error_reporting(0);
include("conexion.php");

$cod=$_POST['cod_cliente'];
$codn=$_POST['codn'];
$nomn=$_POST['nomn'];
$apen=$_POST['apen'];
$corn=$_POST['corn'];
$dirn=$_POST['dirn'];
$teln=$_POST['teln'];
$barn=$_POST['barn'];

if ($cod==$codn){
	if(empty($cod and empty($nomn))){


$consulta="SELECT * FROM cliente";



$consulta =("UPDATE cliente SET cod_cliente='$codn',nom_cliente='$nomn'  WHERE cod_cliente='$cod'");
 $resultado=mysql_query($consulta,$con);
echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../cliente/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';

}

	if(empty($cod and empty($apen))){

$consulta =("UPDATE cliente SET  cod_cliente='$codn',ape_cliente='$apen'  WHERE cod_cliente='$cod'");
 $resultado=mysql_query($consulta,$con);
 echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../cliente/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';


}

if(empty($cod and empty($corn))){

$consulta =("UPDATE cliente SET  cod_cliente='$codn',correo='$corn'  WHERE cod_cliente='$cod'");
 $resultado=mysql_query($consulta,$con);
 echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../cliente/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';


}

if(empty($cod and empty($dirn))){

$consulta =("UPDATE cliente SET  cod_cliente='$codn',direccion='$dirn'  WHERE cod_cliente='$cod'");
 $resultado=mysql_query($consulta,$con);
 echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../cliente/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';


}
if(empty($cod and empty($teln))){

$consulta =("UPDATE cliente SET  cod_cliente='$codn',telefono='$teln'  WHERE cod_cliente='$cod'");
 $resultado=mysql_query($consulta,$con);
 echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../cliente/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';


}
if(empty($cod and empty($barn))){

$consulta =("UPDATE cliente SET  cod_cliente='$codn',barrio='$barn'  WHERE cod_cliente='$cod'");
 $resultado=mysql_query($consulta,$con);
 echo "<span style='font-weight:bold;color:green;'>Datos Actualizados:</span><br>";		
echo'<a href="../cliente/listar.php" class="btn btn-large btn-warning" role="button">Siguiente</a></center>';


}




}else  {

	echo "<span style='font-weight:bold;color:red;'>Los codigos no coinsiden, intentelo nuevamente.</span>";
	header('Location: ../usuario/modificar.php ');
	echo'<a href="../usuario/modificar.php" class="btn btn-large btn-danger" role="button">Atras</a></center>';

}



?>


		<?php
  include("../template/footer.php");?>