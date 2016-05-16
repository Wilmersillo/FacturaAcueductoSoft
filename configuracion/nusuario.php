<?php
	include("conexion.php");//se incluye la clase conexion
	$cargo;
	$consulta="select * from puesto";//realizamos una consulta al servidor
	$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
	while($row=mysql_fetch_array($resultado_consulta))
		if($row['nombre']==$_POST['cargo'])
			$cargo=$row['id'];
	$permiso=($cargo<2)?1:2;
	$consulta="INSERT INTO `empleado`(`cod`, `nom`, `ape`, `cargo`, `acceso`, `pass`) VALUES (".$_POST['cod'].",'".$_POST['nom']."','".$_POST['ape']."',".$cargo.",".$permiso.",'".md5($_POST['pass'])."')";
	mysql_query($consulta,$con);//la ejecutamos
	$error=mysql_error($con);
	if(!empty($error)){
		header('Location: ../usuario/index.php?v=nok');}
	else{
		header('Location: ../usuario/index.php?v=ok');}
	?>