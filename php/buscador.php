<?php 
	require_once('../conn/connect.php');
	sleep(0.5);

	$search = '';
	if(isset($_POST['search'])){
		$search = $_POST['search'];
	}

	$consulta = "SELECT * FROM detalles WHERE detalles LIKE '%" .$search. "%' ";
	$resultado = $connect->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
 ?>
 <?php if ($total>0 && $search!='') { ?>
 			<h2>Resultados de la búsqueda: <?php echo $total; ?></h2>
 			<?php do { ?>
 				<div class="detalles">
 					<a href="php/detalle.php?id=<?php echo $fila['id'] ?>&search=<?php echo $search ?> ">
 						<span class="contenido"><?php echo 'Id:' ?> <?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['id'])) ?></span>
 						<span class="titulo"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['detalles'])) ?></span><br>
 					</a>
				</div>
 			<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php }
elseif ($total>0 && $search=='') echo '<h2>Ingresa un parametro de busqueda</h2><p>Ingresa detalles de busqueda</p>';
else echo '<h2>No se encontraron resultados</h2><p>Intenta con otra palabra</p>';
?>





