<?php require_once('../conn/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX y jQuery</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/ajax_fic.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
</head>
<body>
	<div id="container">
		<img src="../img/logoMetro.png" id="logo">
	</div>

	<br>
	<div class="btn-group center">
		<a href="../neu.php"><button>Neum&aacutetico</button></a>
		<a href="../php/ferreo.php"><button>F&eacuterreo</button></a>
		<a href="../php/fic.php"><button>Ficha de Inspecci&oacuten de Calidad</button></a>
		<a href="../php/ets.php"><button>Especificaciones T&eacutecnicas</button></a>
  		<a href="../php/libros.php"><button>Libros naranja</button></a>
	</div>
	</div>
	<br>
	<div class="container">
		<div class="form center">
			<form action="" method="post" name="form_fic" id="form_fic">
				<h2 class="center">B&uacutesqueda de informaci&oacuten en Fichas de Inspecci&oacuten de Calidad</h2>
				<input type="text" name="codigo_fic" id="codigo_fic">
			</form>
		</div>	
		<div id="resultados"></div>
		<div class="footer center"><br>
			Sistema de Transporte Colectivo  <span>&#8226;</span> Direcci&oacuten de Ingenier&iacutea y Desarrollo Tecnol&oacutegico <span>&#8226;</span> Gerencia de Ingenier&iacutea y Nuevos Proyectos <span>&#8226;</span> Coordinaci&oacuten de Desarrollo Tecnol&oacutegico <span>&#8226;</span> &Aacuterea Inform&aacutetica
		</div>
	</div>
</body>
</html>

