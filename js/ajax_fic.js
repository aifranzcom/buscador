$(function(){
	$('#codigo_fic').val('');
	$('#codigo_fic').focus();
	$('#form_fic').submit(function(e){//search_form es el nombre del Formulario
		e.preventDefault();
	})

	$('#codigo_fic').keyup(function(){
		var envio = $('#codigo_fic').val();
		$('#logo').html('<h2>Mi buscador</h2> <hr/>');
		$('#resultados').html('<h2><img src="../img/Loading.gif" width="80" alt="" /> Cargando</h2>');

		$.ajax({
			type: 'POST',
			url: '../php/buscador_fic.php',
			data: ('codigo_fic='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}

			}
		})
	})
})