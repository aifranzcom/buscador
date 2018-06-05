<?php require_once('conn/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX y jQuery</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div id="container">
    	<nav class="navbar navbar-default">
       		<div class="container-fluid">
	       		<a href="#" class="navbar-brand" ><img src="img/logoMetro.png" id="logo"></a>
       		</div>
			<div class="collapse navbar-collapse" id="nabar-1">
				<ul class="nav navbar-nav navbar-right">
 					<li id="menu"><a href="#" onclick="" style="font-size: 15px;"><span>Iniciar Sesión</span></a></li>
				</ul>
			</div>
		</nav>
	</div>
	
	<div class="container">
		<div class="form center">
			<form action="" method="post" name="search_form" id="search_form">
				<h2>Ingrese palabra de búsqueda</h2>
				<input type="text" name="search" id="search">
			</form>
		</div>	
		<div id="resultados"></div>
		<div class="footer center">
			STC / DIDT / GINP / CDT / AI <br>
		</div>
	</div>
</body>
</html>
