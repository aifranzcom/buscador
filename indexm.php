<?php require_once('conn/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX y jQuery</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajaxn.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilosm.css">
</head>
<body>
	<div id="container">
		<img src="img/logoMetro.png" id="logo">
	</div>

	<br>
	<div class="btn-group center">
  		<a href="indexm.php"><button>Planos</button></a>
		<a href="php/fic.php"><button>Ficha de Inspección de Calidad</button></a>
  		<a href="php/libros.php"><button>Libros naranja</button></a>
	</div>
	<br>
	<div class="container">
		<div class="form center">
			<form action="" method="post" name="search_form" id="search_form">
				<h2>Búsqueda de información técnica en Planos</h2>
				<input type="text" name="search" id="search">
			</form>
		</div>
		<div id="resultados"></div>
		<div class="footer center"><br>
			Sistema de Transporte Colectivo  <span>&#8226;</span> Direcci&oacuten de Ingenier&iacutea y Desarrollo Tecnol&oacutegico <span>&#8226;</span> Gerencia de Ingenier&iacutea y Nuevos Proyectos <span>&#8226;</span> Coordinaci&oacuten de Desarrollo Tecnol&oacutegico <span>&#8226;</span> &Aacuterea Inform&aacutetica
		</div>
	</div>
</body>
</html>

