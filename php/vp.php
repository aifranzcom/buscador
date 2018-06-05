<?php require_once('../conn/connect.php') ?>
<?php 
	$id = '';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	$consultap = "SELECT grafico FROM fic WHERE id = '" .$id. "'";
	$resultadop = $connect->query($consultap);
	$filap = mysqli_fetch_assoc($resultadop);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Planos</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/estilosm.css">
</head>
<body>
	<div class="container">
		<div class="center">
			<img src="../img/logo.png" width="100" alt="Información especifica" title="Buscador.com"/>
		</div>
		<div class="form center">
			<a href="javascript:history.back(1);">Volver atras</a>
		</div>
		<div class="resultados">
			<object><src=" <?php header('Content-type: application/pdf'); ?> <?php echo $filap['grafico']; ?>" width="100" height="100" style="border: 1px;"></iframe></object>
		</div>
	</div>
</body>
</html>
