<?php
    include("../template/head.php");  
  if($_SESSION["cargo"]!=1)header('Location: ../login/index.php');
  echo "Eliminar Cliente";
  include("../template/contenido.php");
  echo '<DIV STYLE="font-size: 16px; color: red">';
  if(!empty($_GET["v"])){
    if($_GET["v"]=="ok")echo "Se ha creado el nuevo cliente";
    else echo"Ha ocurrido un error";}
  echo '</DIV>';
  ?>
     
<form method="post"  action="../configuracion/eliminarF.php">
	<cente>Confirmar Cedula: <input type="text" name="eli" rquired/>
	
	<input type="submit" class="btn btn-large btn-danger" value="Eliminar" />
	</form>

	<a href="../cliente/listar.php" class="btn btn-large btn-success" role="button">Atras</a></center>
	
<?php
  include("../template/footer.php");?>