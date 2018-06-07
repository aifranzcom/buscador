<?php require_once('../conn/connect.php') ?>
<?php 
	$search = '';
	if(isset($_GET['search'])){
		$search = $_GET['search'];
	}
	$id = '';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	$consulta = "SELECT id, plano, descripcion FROM ferreo WHERE id = " .$id. "";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);

	/*$consultae = "SELECT * FROM especificacionesref WHERE id = " .$id. "";
	$resultadoe = $connect->query($consultae);
	$filae = mysqli_fetch_assoc($resultadoe);
	$totale = mysqli_num_rows($resultadoe);*/
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX y jQuery</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/ajaxf.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
</head>
<body>
	<div id="container">
	       		<img src="../img/logoMetro.png" id="logo">
	</div>
<br>
	<div class="container">
		<div class="form center">
			<a href="javascript:history.back(1);">Volver atr&aacutes</a>
		</div>
		<div class="resultados">
			<h1><?php echo "Id: " .strtoupper(utf8_encode($fila['id'])) ?></h1>
			<a href="planovpdff.php?id=<?php echo $fila['id'] ?>#toolbar=0">
				<h1><?php echo "Plano: " .strtoupper(utf8_encode($fila['plano'])) ?></h1>
			</a>
			<h3><?php echo strtoupper(utf8_encode($fila['descripcion'])) ?></h3>
		</div>
<?php /*if ($totale>0 && $search!='') { ?>
 			<h2>Referencias t&eacutecnicas:</h2>
 			<?php do { ?>
 				<div class="especificaciones">
 					<a href="etvpdff.php?especificacion=<?php echo $filae['especificacion'] ?>#toolbar=0">
 						<span class="titulo"><?php echo $filae['especificacion'] ?></span><br>
 					</a>
				</div>
 			<?php } while ($filae=mysqli_fetch_assoc($resultadoe)); ?>
<?php } */?>
	</div>
</body>
</html>