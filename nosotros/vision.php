
<?php
	include("../template/head.php");
	
	if($_SESSION["cargo"]!=1) header('Location: ../login/index.php');
	echo "VISION";
	include("../template/contenido.php");

	?>

<form action="../nostros" method="post">

<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<p align="justify">
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"  />
						
Ser una empresa líder en la gerencia y operación de proyectos en torno al ciclo integral del agua, posicionada regionalmente y con proyección internaciona
					<img src="../Imagenes/vision.gif" class="img-responsive" alt="Guitarra 1">
			
					</p>
				

				</div>


						</form>
<?php
	include("../template/footer.php");?>