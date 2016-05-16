

<?php 
/*header('Content-type: application/vnd.ms-word');
header("Content-Disposition: attachment; filename=Factura.doc");
		header("Pragma: no-cache");
		header("Expires: 0");

*/
 //$cod=$_POST['codigo']; 

include('conexion.php');

 //$consulta ="SELECT * FROM cliente,factura WHERE cliente.cod_cliente=factura.cod_cliente and cliente.cod_cliente='$cod'";
 //$resultado=mysql_query($consulta,$con);


//$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
//	while($row=mysql_fetch_array($resultado_consulta)){
?>
<table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 100%;">
                           <table class="table table-striped">
<tr>
	<td><img src="../imagenes/logo.png"></a></td>
	<td><b>Datos de la empresa</b><br>Nombre: Empresa De Acueducto <br><?php
	echo "Fecha: ".date("Y-m-d")."";?><br> Nit: 17224527 <br> </td>
	<td><b>Datos de Usuario</b><br>Nombre:<?php echo "<br>".$row['nom_cliente'].""; echo "".$row['ape_cliente'].""; ?><br>Direccion:<?php echo "".$row['direccion'].""; ?><br>Estrato: 2<br></td>

</tr>
<td></td>


<tr>
<td>Referencia de pago:<br>Nª Factura:<?php echo "".$row['nro_factura'].""; ?></td>
<td></td><td>Ultimos Consumos:<br>1.<br>2<br>3<br>4<br></td>
<td></td>
<tr><td colspan='2'><b>Periodo de Pago:</b></td></tr>
<tr><td>Fecha Inicio:<?php echo "<br>".$row['fech_inicio'].""; ?></td><td>Fecha Fin:<?php echo "<br>".$row['fech_fin'].""; ?><td>Lectura Actual:<br>Lectura Anterior:<br>Consumo mt3:<?php echo "".$row['consumo'].""; ?></td></tr>
<td></td>
</tr>
<tr><td>Fecha de pago:<br>Codigo de suscriptor:</td><td></td><td><b>Estado de lectura</b></td></tr>
<tr>
<tr></tr>

</tr>
<td></td>

<tr>
<tr><td><b>RESUMEN DE LA CUENTA</b></td></tr>
</tr>

<tr>
<td></td><td>Subtotal de servicios&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  Cantidad &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    Valor unitario &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  Costo &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  Interes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  
<td> </td>
<tr>


<td><b>Interes por pago extemporaneo:</b></td>


</tr>	
<td><b>Observacions Y aclaraciones</b></td><td><b>Total</b></td><td><img src="../imagenes/cod.png"></td></td>

</tr>

<td></td>
<tr>
	<td><img src="../imagenes/logo.png"></a></td>
	<td><b>Datos de la empresa</b><br>Nombre: Empresa De Acueducto <br><?php
	echo "Fecha: ".date("Y-m-d")."";?><br> Nit: 17224527 <br> </td>
<td></td>

</tr>

<tr>

	<td><b>Nro de la factura:<?php echo "".$row['nro_factura'].""; ?></b><br><b>Codigo del usuario:</b></a><td></td> <td><b>Efectivo:<br>Valor:</b></tr></td>

</tr>
<tr>
<td><b>Facturado Inicial:<?php echo "<br>".$row['fech_inicio'].""; ?></b></td><td><b>Facturado Final:<?php echo "<br>".$row['fech_inicio'].""; ?></b></td>
</tr>
<tr><td></td></tr>
<tr><td><b>Total</b></td><td></td><td><img src="../imagenes/cod.png"></td></tr>

</tbody>
       </table><br />

<?php
}
?>


</tbody>

  </table><br />
  
    </div><!-- /.container -->


