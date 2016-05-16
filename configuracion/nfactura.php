<?php
include("conexion.php");//se incluye la clase conexion
session_start();
	
	$nro = strip_tags($_POST['nro_factura']);
    $fea = strip_tags($_POST['fech_inicio']);
    $fef = strip_tags($_POST['fech_fin']);
    $con = strip_tags($_POST['consumo']);
    $cod = strip_tags($_POST['cod_cliente']);
    
    


	//while($row=mysql_fetch_array($resultado_consulta))
$consulta="select * from factura";//realizamos una consulta al servidor
$consulta="INSERT INTO factura(nro_factura, fech_inicio, fech_fin, consumo, cod_cliente) VALUES ('$nro','$fea','$fef','$con','$cod')";
           

	//$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
	mysql_query($consulta,$con);//la ejecutamos
	$error=mysql_error($con);
	if(!empty($error)){
		header('Location: ../factura/index.php?v=nok');}
	else{
		header('Location: ../factura/index.php?v=ok');}





?>
