<?php require_once('../conn/connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX y jQuery</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
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
	<br>
	<div class="container">
		<div class="form center">
			<form action="" method="post" name="form_libros" id="form_libros">
				<h2 class="center">Informaci&oacuten t&eacutecnica en Libros Naranja</h2>
			</form>
		</div>	
		<div id="resultados">
<?php 
	require_once('../conn/connect.php');
	sleep(0.5);

	$consulta = "SELECT id, nombre, descripcion FROM libros";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
?>
<?php if ($total>0) { ?>
 			<h2>Contenido: <?php echo $total; ?></h2>
 			<?php do { ?>
 				<div class="detalles">
 					<a href="librosvpdf.php?id=<?php echo $fila['id']?>#toolbar=0 ">
 						<span class="contenido"><?php echo 'Id:' ?> <?php echo utf8_encode($fila['id']) ?></span>
 						<span class="titulo"><?php echo utf8_encode($fila['nombre']) ?></span><br>
 						<span class="desc"><?php echo utf8_encode($fila['descripcion']) ?></span><br>
 					</a>
				</div>
 			<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
elseif ($total>0) echo '';
else echo '';
?>
		</div>
		<div class="footer center"><br><br><br>
			Sistema de Transporte Colectivo  <span>&#8226;</span> Direcci&oacuten de Ingenier&iacutea y Desarrollo Tecnol&oacutegico <span>&#8226;</span> Gerencia de Ingenier&iacutea y Nuevos Proyectos <span>&#8226;</span> Coordinaci&oacuten de Desarrollo Tecnol&oacutegico <span>&#8226;</span> &Aacuterea Inform&aacutetica
		</div>
	</div>
</body>
</html>