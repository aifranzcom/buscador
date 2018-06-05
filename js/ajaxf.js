$(function(){
	$('#search').val('');
	$('#search').focus();
	$('#search_form').submit(function(e){//search_form es el nombre del Formulario
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();
		$('#logo').html('<h2>Mi buscador</h2> <hr/>');
		$('#resultados').html('<h2><img src="../img/Loading.gif" width="80" alt="" /> Cargando</h2>');

		$.ajax({
			type: 'POST',
			url: '../php/buscadorf.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}

			}
		})
	})
})