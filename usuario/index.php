<?php
	include("../template/head.php");
	
	if($_SESSION["cargo"]!=1)header('Location: ../login/index.php');
	echo "Crear Usuario";
	include("../template/contenido.php");
	echo '<DIV STYLE="font-size: 16px; color: red">';
	if(!empty($_GET["v"])){
		if($_GET["v"]=="ok")echo "Se ha creado el nuevo usuario";
		else echo"Ha ocurrido un error";}
	echo '</DIV>';
	?>
<form action="../configuracion/nusuario.php" method="post">
	<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                            <tbody>
								<tr>
									<td>C&oacutedigo:</td>
									<td><input name="cod" placeholder="Codigo" type="text" required/></td>
									</tr>
								<tr>
									<td>Nombre:</td>
									<td><input name="nom" placeholder="Primer Nombre" type="text" required/></td>
									</tr>
								<tr>
									<td>Apellido:</td>
									<td><input name="ape" placeholder="Primer Apellido" type="text" required/></td>
									</tr>
								<tr>
									<td>Contrase&ntildea:</td>
									<td><input name="pass" placeholder="*******" type="password"  required/></td>
									</tr>
								<tr>
									<td>Cargo:</td>
									<td>
										<select name="cargo">
										<?php
											include("../configuracion/conexion.php");//se incluye la clase conexion
											$consulta="select * from puesto";//realizamos una consulta al servidor
											$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
											while($row=mysql_fetch_array($resultado_consulta)){//se guardan los datos en un arreglo
												echo "<option>";
												echo $row['nombre'];//se imprimen los resultados
												echo "</option>";}
												?>
										</select>
										
										
									
									
									
								
                            </tbody>
                           
                        </table><br />
                        	
                          <input type="submit" class="btn btn-success" value="Registrar"/>
						</form>
<?php
	include("../template/footer.php");?>