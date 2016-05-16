<?php
	include("../template/head.php");
	
	if($_SESSION["cargo"]!=1)header('Location: ../login/index.php');
	echo "Lista de Empleados";
	include("../template/contenido.php");
	?>
<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                           <table class="table table-striped">
								<tr>
								<td><h5><B><center>Codigo</B></h5></td>
									<td><h5><B><center>Nombre </B></h5></td>
									<td><h5><B><center>Apellido</B></h5></td>
									<td><h5><B>Cargo</B></h5></td>
								
									</tr>
								<?php
											include("../configuracion/conexion.php");//se incluye la clase conexion
											$consulta="select * from empleado";
											$resultado_consulta=mysql_query($consulta,$con);
											while($row=mysql_fetch_array($resultado_consulta)){//se guardan los datos en un arreglo
												echo "<tr>";
												echo "<td><center>".$row['cod']."</td>";
												echo "<td><center>".$row['nom']."</td>";
												echo "<td><center>".$row['ape']."</td>";
												
												$consulta="select * from puesto";
												$resultado=mysql_query($consulta,$con);
												while($row1=mysql_fetch_array($resultado)){
													if($row['cargo']==$row1['id'])echo "<td>".$row1['nombre']."</td>";}
												
												echo "</tr><center>";}
											
											
												?>
							</tbody>
                        </table><br />
                        <a href="index.php" class="btn btn-large btn-success" role="button">Nuevo</a></center>
                        	<a href="modificar.php" class="btn btn-large btn-warning " role="button">Modificar</a></center>
                        	<a href="eliminar.php" class="btn btn-large btn-danger " role="button">Eliminar</a></center>
                        	<a href="imprimir.php" class="btn btn-large btn-danger " role="button">Imprimir PDF</a></center>
                        	
	
		<!--<a href="../home/index.php"><img src="../imagenes/home.png"></a>-->
<?php
	include("../template/footer.php");?>