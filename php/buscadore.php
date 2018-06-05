<?php 
	require_once('../conn/connect.php');
	sleep(0.5);
	$codigo_ets = '';

	
	/*if(isset($_POST['codigo_ets'])){
		$codigo_ets = $_POST['codigo_ets'];
	}

	$consulta = "SELECT id, especificacion, descripcion FROM especificaciones WHERE especificacion LIKE '%" .$codigo_ets. "%' OR descripcion LIKE '%" .$codigo_ets. "%' ";*/


	if(isset($_POST['codigo_ets'])){
		$codigo_ets = $_POST['codigo_ets'];
		if($codigo_ets == "*"){
			$consulta = "SELECT id, especificacion, descripcion FROM especificaciones";
		}
		else $consulta = "SELECT id, especificacion, descripcion FROM especificaciones WHERE especificacion LIKE '%" .$codigo_ets. "%' OR descripcion LIKE '%" .$codigo_ets. "%' ";
	}	






	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
 ?>
<?php if ($total>0 && $codigo_ets!='') { ?>
 			<h2>Resultados: <?php echo $total; ?></h2>
 			<?php do { ?>
 				<div class="detalles">
 					<a href="etsvpdf.php?id=<?php echo $fila['id'] ?>&codigo_ets=<?php echo $codigo_ets ?>#toolbar=0 ">
 						<span class="contenido"><?php echo 'Id:' ?> <?php echo str_replace($codigo_ets, '<strong>'.$codigo_ets.'</strong>', utf8_encode($fila['id'])) ?></span>
 						<span class="titulo"><?php echo str_replace($codigo_ets, '<strong>'.$codigo_ets.'</strong>', utf8_encode($fila['especificacion'])) ?></span><br>
 						<span class="desc"><?php echo str_replace($codigo_ets, '<strong>'.$codigo_ets.'</strong>', utf8_encode($fila['descripcion'])) ?></span><br>
 					</a>
				</div>
 			<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
elseif ($total>0 && $codigo_ets=='') echo '';
else echo '<h2>No se encontraron resultados en campos adicionales.</h2><p>Intenta con otra palabra</p>';
?>