<?php 
	require_once('../conn/connect.php');
	sleep(0.5);
	$codigo_fic = '';


	if(isset($_POST['codigo_fic'])){
		$codigo_fic = $_POST['codigo_fic'];
		if($codigo_fic == "*"){
			$consulta = "SELECT id, ficha, descripcion FROM fic";	
		}
		else $consulta = "SELECT id, ficha, descripcion FROM fic WHERE ficha LIKE '%" .$codigo_fic. "%' OR descripcion LIKE '%" .$codigo_fic. "%' ";
	}


	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
 ?>
<?php if ($total>0 && $codigo_fic!='') { ?>
 			<h2>Resultados: <?php echo $total; ?></h2>
 			<?php do { ?>
 				<div class="detalles">
 					<a href="ficvpdf.php?id=<?php echo $fila['id'] ?>&codigo_fic=<?php echo $codigo_fic ?>#toolbar=0 ">
 						<span class="contenido"><?php echo 'Id:' ?> <?php echo str_replace($codigo_fic, '<strong>'.$codigo_fic.'</strong>', utf8_encode($fila['id'])) ?></span>
 						<span class="titulo"><?php echo str_replace($codigo_fic, '<strong>'.$codigo_fic.'</strong>', utf8_encode($fila['ficha'])) ?></span><br>
 						<span class="desc"><?php echo str_replace($codigo_fic, '<strong>'.$codigo_fic.'</strong>', utf8_encode($fila['descripcion'])) ?></span><br>
 					</a>
				</div>
 			<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
elseif ($total>0 && $codigo_fic=='') echo '';
else echo '<h2>No se encontraron resultados en campos adicionales.</h2><p>Intenta con otra palabra</p>';
?>