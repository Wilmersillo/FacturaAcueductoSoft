<?php
	include("../template/head.php");
	
	if($_SESSION["cargo"]!=1)header('Location: ../login/index.php');
	echo "Lista de Clientes";
	include("../template/contenido.php");
	?>
<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                        <!--    <tbody>   tr son las filas --> 
                               <table class="table table-striped">
                          
                           <tr>
                             <!-- td son las columnas -->
								<tr>
									<td><h5><B><center>Codigo</B></h5></td>
									<td><h5><B><center>Nombre </B></h5></td>
									<td><h5><B><center>Apellido</B></h5></td>
									<td><h5><B><center>Correo</B></h5></td>
									<td><h5><B><center>Direccion</B></h5></td>
									<td><h5><B><center>Telefono</B></h5></td>
									<td><h5><B><center>Barrio</B></h5></td>
									
									</tr>
								<?php
											include("../configuracion/conexion.php");//se incluye la clase conexion
											$consulta="select * from cliente";

											$resultado_consulta=mysql_query($consulta,$con);
											while($row=mysql_fetch_array($resultado_consulta)){//se guardan los datos en un arreglo
												echo "<tr>";
												echo "<td><center><justify>".$row['cod_cliente']."</td>";
												echo "<td><center>".$row['nom_cliente']."</td>";
												echo "<td><center>".$row['ape_cliente']."</td>";
												echo "<td><center>".$row['correo']."</td>";
												echo "<td><center>".$row['direccion']."</td>";
												echo "<td><center>".$row['telefono']."</td>";
												echo "<td><center>".$row['barrio']."</td>";
												
												
												echo "</tr>";}
											
											
												?>
							</tbody>
                        </table><br />
                        <a href="index.php" class="btn btn-large btn-success" role="button">Nuevo</a></center>
                        	<a href="modificar.php" class="btn btn-large btn-warning " role="button">Modificar</a></center>
		<a href="eliminar.php" class="btn btn-large btn-danger" role="button">Eliminar</a></center>
<a href="../configuracion/listaC.php" class="btn btn-large btn-danger" role="button">Imprimir PDF</a></center>
<?php
	include("../template/footer.php");?>