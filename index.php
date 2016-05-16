<?php
	session_start();
	if(empty($_SESSION["cod"]))header('Location: ../login/index.php');
	header('Location: home/index.php');
	?>