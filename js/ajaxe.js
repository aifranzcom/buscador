$(function(){
	$('#codigo_ets').focus();
	$('#form_ets').submit(function(e){//search_form es el nombre del Formulario
		e.preventDefault();
	})

	$('#codigo_ets').keyup(function(){
		var envio = $('#codigo_ets').val();
		$('#logo').html('<h2>Buscador</h2> <hr/>');
		$('#resultados').html('<h2><img src="../img/Loading.gif" width="60" alt="" /></h2>');

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