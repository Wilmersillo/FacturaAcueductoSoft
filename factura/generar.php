<?php
    include("../template/head.php");  
  if($_SESSION["cargo"]!=1)header('Location: ../login/index.php');
  echo "Generar Factura";
  include("../template/contenido.php");
  echo '<DIV STYLE="font-size: 16px; color: red">';
  if(!empty($_GET["v"])){
    if($_GET["v"]=="ok")echo "Se ha creado el nuevo usuario";
    else echo"Ha ocurrido un error";}
  echo '</DIV>';
  ?>
     
<form method="post"  action="imprimirPDF.php">
	<cente>Cedula: <input type="text" name="codigo" rquired/>
	
	
	<input type="submit" class="btn btn-large btn-default" value="Generar" />
	</form>

	<a href="../usuario/listar.php" class="btn btn-large btn-success" role="button">Atras</a></center>
	  <?php include("../template/footer.php");?>