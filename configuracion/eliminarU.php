<?php
	include("../template/head.php");
	echo "Eliminar Usuario";
	include("../template/contenido.php");
	?>

	<?php
$eli=$_POST['eliminar'];


if(!empty($eli)){
include("conexion.php");

    
     $consulta ="DELETE  FROM empleado WHERE cod='$eli'";

    $resultado=mysql_query($consulta,$con);
   echo "Codigo'.$eli.'  Eliminado";
   


if($ro=$resultado){
           $resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
		      $consulta ="DELETE  FROM empleado WHERE cod='$eli'";
			
			echo" <br>";  
			echo '<a href="../usuario/listar.php" class="btn btn-large btn-warning " role="button">Siguiente</a></center>';}
			else{
				
				echo "Error";
			}}else {echo ' culo';header('Location: eliminar.php');
}
			?>
		<?php
  include("../template/footer.php");?>