<?php require_once('../conn/connect.php') ?>
<?php 
	$especificacion = '';
	if(isset($_GET['especificacion'])){
		$especificacion = $_GET['especificacion'];
	}
	$consultaet = "SELECT archivo FROM especificaciones WHERE especificacion = '" .$especificacion. "'";
	$resultadoet = $connect->query($consultaet);
	$filaet = mysqli_fetch_assoc($resultadoet);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Especificacion tecnica</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
</head>
<body>
	<div class="container">
		<div class="center">
			<img src="../img/logo.png" width="100" alt="Informaci&oacuten espec&iacutefica" title="Buscador.com"/>
		</div>
		<div class="form center">
			<a href="javascript:history.back(1);">Volver atras</a>
		</div>
		<div class="resultados">
			<object><iframe src=" <?php header('Content-type: application/pdf'); ?> <?php echo $filaet['archivo']; ?> " width="100" height="100" style="border: 1px;"></iframe></object>
		</div>
	</div>
</body>
</html>
