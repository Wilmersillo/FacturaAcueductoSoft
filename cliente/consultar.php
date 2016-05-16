<?php
	include("../template/head.php");
	echo "Consultar Cliente";
	include("../template/contenido.php");
	?>
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
	C&oacute;digo: <input type="text" name="buscar"/>
	<input type="submit" class="btn btn-default" value="Buscar" />
	</form>


<?php
	if(!empty($_POST['buscar'])){
		include("../configuracion/conexion.php");//se incluye la clase conexion
		echo "<h3>Cliente: ".$_POST['buscar']."</h3>";
		$consulta="SELECT cliente.cod_cliente,nom_cliente,ape_cliente,factura.fech_inicio,factura.fech_fin,factura.consumo FROM cliente,factura WHERE factura.cod_cliente=cliente.cod_cliente and cliente.cod_cliente=".$_POST['buscar'];//realizamos una consulta al servidor
		$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
		$row=mysql_fetch_array($resultado_consulta);
		if(!empty($row)){
			$consulta="SELECT cliente.cod_cliente,nom_cliente,ape_cliente,factura.fech_inicio,factura.fech_fin,factura.consumo FROM cliente,factura WHERE factura.cod_cliente=cliente.cod_cliente and cliente.cod_cliente=".$_POST['buscar'];//realizamos una consulta al servidor
			$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
			echo "<table class='art-article' style='width:100%;'><tr><td>Codigo<td>Nombre<td>Apelllido<td>Fecha Inicio<td>Fecha Fin<td>Consumo</tr>";
			while($row=mysql_fetch_array($resultado_consulta)){
			


											echo "<tr>";
											echo "<td><center><justify>".$row['cod_cliente']."</td>";
										    echo "<td><center><justify>".$row['nom_cliente']."</td>";
											echo "<td><center><justify>".$row['ape_cliente']."</td>";
									        echo "<td><center><justify>".$row['fech_inicio']."</td>";
											  echo "<td><center><justify>".$row['fech_fin']."</td>";                	                  
											echo "<td><center><justify>".$row['consumo']."</td>";
											
												                  echo "</tr>";

				}
			echo "</table>";
			}
		else echo "<h3>No existe el cliente: ".$_POST["buscar"]."!</h3>";

		}	?><?php
  include("../template/footer.php");?>
