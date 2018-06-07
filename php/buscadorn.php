<?php 
	require_once('../conn/connect.php');
	sleep(0.5);
	$search = '';
	if(isset($_POST['search'])){
		$search = $_POST['search'];
		if($search == "*"){
			$consulta = "SELECT * FROM detalles";
		}
		else $consulta = "SELECT * FROM detalles WHERE detalles LIKE '%" .$search. "%' ";
	}
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);

	$consultap = "SELECT id, plano, descripcion FROM neumatico WHERE plano LIKE '%" .$search. "%' OR descripcion LIKE '%" .$search. "%' ";
	$resultadop = $connect->query($consultap);
	$filap = mysqli_fetch_assoc($resultadop);
	$totalp = mysqli_num_rows($resultadop);
 ?>
 <?php if ($total>0 && $search!='') { ?>
 			<h2>Resultados por criterio de Detalles: <?php echo $total; ?></h2>
 			<?php do { ?>
 				<div class="detalles">
 					<a href="php/detallen.php?id=<?php echo $fila['id'] ?>&search=<?php echo $search ?> ">
 						<span class="contenido"><?php echo 'Id:' ?> <?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['id'])) ?></span>
 						<span class="titulo"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['detalles'])) ?></span><br>
 					</a>
				</div>
 			<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
elseif ($total>0 && $search=='') echo '<p align="center">Escribe palabra a buscar o <b>*</b> para mostrar contenido</p>';
else echo '<h2>No se encontraron resultados por criterio de busqueda en Detalles.</h2><p>Intenta con otra palabra</p>';
?>
<br>
 <?php if ($totalp>0 && $search!='') { ?>
 			<h2>Resultados por campos adicionales: <?php echo $totalp; ?></h2>
 			<?php do { ?>
 				<div class="detalles">
 					<a href="php/detallen.php?id=<?php echo $filap['id'] ?>&search=<?php echo $search ?> ">
 						<span class="contenido"><?php echo 'Id:' ?> <?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($filap['id'])) ?></span>
 						<span class="titulo"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($filap['plano'])) ?></span><br>
 						<span class="desc"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($filap['descripcion'])) ?></span><br>
 					</a>
				</div>
 			<?php } while ($filap=mysqli_fetch_assoc($resultadop)); ?>
<?php }
elseif ($totalp>0 && $search=='') echo '';
else echo '<h2>No se encontraron resultados en campos adicionales.</h2><p>Intenta con otra palabra</p>';
?>