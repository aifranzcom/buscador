<?php require_once('../conn/connect.php') ?>
<?php 
	$totale=0;
	$search = '';
	if(isset($_GET['search'])){
		$search = $_GET['search'];
	}
	$id = '';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	$consulta = "SELECT id, plano, descripcion FROM neumatico WHERE id = " .$id. "";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);

	$consultae = "SELECT * FROM especificacionesref WHERE id = " .$id. "";
	$resultadoe = $connect->query($consultae);
	$filae = mysqli_fetch_assoc($resultadoe);
	$totale = mysqli_num_rows($resultadoe);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador con AJAX y jQuery</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/ajaxn.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
</head>
<body>
	<div id="container">
	       		<img src="../img/logoMetro.png" id="logo">
	</div>
<br>
	<div class="container">
		<div class="form center">
			<a href="javascript:history.back(1);">Volver atras</a>
		</div>
		<div class="resultados">
			<h1><?php echo "Id: " .strtoupper(utf8_encode($fila['id'])) ?></h1>
			<a href="planovpdfn.php?id=<?php echo $fila['id'] ?>#toolbar=0">
				<h1><?php echo "Plano: " .strtoupper(utf8_encode($fila['plano'])) ?></h1>
			</a>
			<h3><?php echo strtoupper(utf8_encode($fila['descripcion'])) ?></h3>
		</div>

<?php if ($totale == 1 && $filae['especificacion']=='') {
			$str='No';
		}
		else {
			$str=$totale;
		}
?>

<?php if ($totale>0 && $search!='') { ?>
 			<h2>Referencias t&eacutecnicas: <?php echo $str; ?></h2>
 			<?php do { ?>
 				<div class="especificaciones">
 					<a href="etvpdfn.php?especificacion=<?php echo $filae['especificacion'] ?>#toolbar=0">
 						<span class="titulo"><?php echo $filae['especificacion'] ?></span><br>
 					</a>
				</div>
 			<?php } while ($filae=mysqli_fetch_assoc($resultadoe)); ?>
<?php } ?>
		<div class="footer center"><br>
			Sistema de Transporte Colectivo  <span>&#8226;</span> Direcci&oacuten de Ingenier&iacutea y Desarrollo Tecnol&oacutegico <span>&#8226;</span> Gerencia de Ingenier&iacutea y Nuevos Proyectos <span>&#8226;</span> Coordinaci&oacuten de Desarrollo Tecnol&oacutegico <span>&#8226;</span> &Aacuterea Inform&aacutetica
		</div>
	</div>
</body>
</html>