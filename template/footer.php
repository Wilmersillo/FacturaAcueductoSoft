
</div>
		</div>
	</div>

	
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="background:#F9F3F3;">

	
	
			<div class="panel-heading">
				<h1 class="panel-title" style="color:red;"><b><center>MENU</center></b></h1>
			</div>
			
<ul class='nav nav-pills nav-stacked' style="cursor:pointer;">
	
	<!--
	
	<li><a href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span> Inicio</a></li>
	<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
	<li><a href='/Sistemas_2/Index.php/configuracion_cuenta'><span class='glyphicon glyphicon-cog'></span> Configuracion de Cuenta</a></li>
	<li><a href='/Sistemas_2/Index.php/cerrar_sesion'><span class='glyphicon glyphicon-log-out'> Salir</a></li>
	
	-->
	
	
	
	
	<li>
		<a><span class='glyphicon glyphicon-home'></span> Nosotros</a>
		<ul >
			<?php 
				if($_SESSION["cargo"]==1){
					echo "<li><a href='../nosotros'><span class='glyphicon glyphicon-road'></span>Misi&oacuten</a></li>";
					}
					?>
			<li>
                <a href="../nosotros/vision.php"><span class='glyphicon glyphicon-send'></span> Visi&oacuten</a></li>
			
			
		</li>
			
		</ul>
		
				<?php
					if($_SESSION["cargo"]==1 ){
	
	echo "<li><a><span class='glyphicon glyphicon-briefcase '></span> Cliente</a><ul><li><a href='../cliente/'><span class='glyphicon glyphicon-plus-sign'></span> Nuevo</a></li>";
	
	echo "<li><a href='../cliente/listar.php'><span class='glyphicon glyphicon-align-justify'></span> Listar</a></li>";
	 echo "<li><a href='../cliente/consultar.php'><span class='glyphicon glyphicon-search'></span> Buscar</a></li>
    
				</ul></li>";
			}?>
				
		<?php 
			if($_SESSION["cargo"]==1){
				echo "<li><a><span class='glyphicon glyphicon-list-alt'></span> Factura</a><ul>";
				echo "<li><a href='../factura'><span class='glyphicon glyphicon-plus-sign'></span> Nueva</a></li>";
                echo "<li><a href='../factura/generar.php'><span class='glyphicon glyphicon-print'></span> Generar Factura</a></li></ul></li>";}?>
		<?php
			if($_SESSION["cargo"]==1){
				echo "<li><a><span class='glyphicon glyphicon-user'></span> Usuarios</a><ul>";
				echo "<li><a href='../usuario'><span class='glyphicon glyphicon-plus-sign'></span> Nuevo</a></li>";
				echo "<li><a href='../usuario/listar.php'><span class='glyphicon glyphicon-align-justify'></span> Listar</a></li>";
				echo "</ul></li>";}?>
		
		<li>
			<a href="../configuracion/salir.php"><span class='glyphicon glyphicon-off'></span> Salir</a>
		</li>
	
	
</ul>
	
</div>
</div>
	</div>
	
	