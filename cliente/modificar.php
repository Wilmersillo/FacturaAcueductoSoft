<?php
	include("../template/head.php");
	echo "Modificar Usuario";
	include("../template/contenido.php");
	?>
<form action="../configuracion/modificarC.php" method="post">
	<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                            <tbody>
								<tr>
									<td>Código Del Usuario  A Modificar:</td>
									<td><input name="cod_cliente" placeholder="Codigo"  type="text" required /></td>
									<td><input name="codn" placeholder="Verificar Codigo"  type="text" required /></td>
									</tr>
								<tr>
									<td>Nuevo Nombre:</td>
									<td><input name="nomn" placeholder="Primer Nombre" type="text" /></td>
									</tr>
							<tr>
									<td>Nuevo Apellido:</td>
									<td><input name="apen" placeholder="Primer Apellido" type="text" /></td>
								
									</tr>
								

								<tr>
									<td>Nuevo Correo:</td>
									<td><input name="corn" placeholder="Primer Apellido" type="text" /></td>
									</tr>
									
									<td>Nuevo Direccion:</td>
									<td><input name="dirn" placeholder="Primer Apellido" type="text" /></td>
									</tr>
								<tr>

                                <tr>
									<td>Telefono Nuevo:</td>
									<td><input name="teln" placeholder="Primer Apellido" type="text" /></td>
									</tr>
								<tr>

								<tr>
									<td>Barrio Nuevo:</td>
									<td><input name="barn" placeholder="Primer Apellido" type="text" /></td>
									</tr>
								<tr>

							<!--	

								<td>Nueva Contraseña:</td>
									<td><input name="pass" placeholder="*******" type="password"  required/></td>
									</tr>
								
									
								-->		
										
									
									
									
								
                            </tbody>
                           
                        </table><br />
                        	<input type='submit' class='btn btn-large btn-warning'  value='Actualizar' />
                        	<a href="../usuario/listar.php" class="btn btn-large btn-success" role="button">Atras</a></center>
                         
						</form>
			

			
	
<?php
  include("../template/footer.php");?>
