<?php require_once('../conn/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/ajaxe.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
</head>
<body>
	<div id="container">
		<img src="../img/logoMetro.png" id="logo">
	</div>
	<div class="acercade">
		<li><a href="../php/acercade.php"><strong>Elaboraron </strong></a></li>
	</div>	
	<div class="form center">
			<h2><b>Informaci&oacuten T&eacutecnica de V&iacuteas</b></h2>
	</div>
	<br>
	<div class="btn-group center">
		<a href="../neu.php"><button>Planos Tipo Metro Neum&aacutetico</button></a>
		<a href="../php/ferreo.php"><button>Planos Tipo Metro F&eacuterreo</button></a>
		<a href="../php/fic.php"><button>Fichas de Inspecci&oacuten de Control de Calidad</button></a>
		<a href="../php/ets.php"><button>Especificaciones T&eacutecnicas</button></a>
  		<a href="../php/libros.php"><button>Libros Naranja</button></a>
	</div>
	</div>
	<br>
	<div class="container">
		<div class="form center">
			<form action="" method="post" name="form_ets" id="form_ets">
				<h3 class="center">B&uacutesqueda de Informaci&oacuten en <strong>Especificaciones T&eacutecnicas</strong></h3>
				<input type="text" name="codigo_ets" id="codigo_ets">
			</form>
		</div>	
		<div id="resultados"></div>
	</div>
</body>
</html>