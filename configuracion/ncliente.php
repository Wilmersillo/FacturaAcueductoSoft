<?php
include("conexion.php");//se incluye la clase conexion
	session_start();
	$cod = strip_tags($_POST['cod_cliente']);
	$fec = strip_tags($_POST['fecha']);
    $nom = strip_tags($_POST['nom_cliente']);
    $ape = strip_tags($_POST['ape_cliente']);
    $tel = strip_tags($_POST['telefono']);
    $corr = strip_tags($_POST['correo']);
    $dir = strip_tags($_POST['direccion']);
    $bar = strip_tags($_POST['barrio']);
    
    
$consulta="select * from cliente";//realizamos una consulta al servidor
$consulta="INSERT INTO cliente(cod_cliente, fecha, nom_cliente, ape_cliente,  telefono, correo, direccion, barrio ) VALUES ('$cod','$fec','$nom','$ape','$tel','$corr','$dir','$bar')";

	mysql_query($consulta,$con);//la ejecutamos
	$error=mysql_error($con);
	if(!empty($error)){
		header('Location: ../cliente/index.php?v=nok');}
	else{
		header('Location: ../cliente/index.php?v=ok');}



?>
