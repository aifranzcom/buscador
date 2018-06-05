$(function(){
	$('#codigo_ets').val('');
	$('#codigo_ets').focus();
	$('#form_ets').submit(function(e){//search_form es el nombre del Formulario
		e.preventDefault();
	})

	$('#codigo_ets').keyup(function(){
		var envio = $('#codigo_ets').val();
		$('#logo').html('<h2>Mi buscador</h2> <hr/>');
		$('#resultados').html('<h2><img src="../img/Loading.gif" width="80" alt="" /> Cargando</h2>');

		$.ajax({
			type: 'POST',
			url: '../php/buscadore.php',
			data: ('codigo_ets='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}

			}
		})
	})
})