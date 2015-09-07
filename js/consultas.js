$(document).ready(function() {

	$("#importacion").click(function(){
	var frac= $('#fraccion').val();
	var cap= $('#capitulo').val();
	var part= $('#partida').val();
	var subpart= $('#subpartida').val();
	var aranc= $('#arancel').val();
	var pe= $('#PE').val();
	var consulta= './src/Objconsultas.php';
	
	$.ajax({
			url: consulta,
			type: 'POST',			
			data: {fraccion: frac,
					capitulo: cap,
					partida: part,
					subpartida: subpart,
					arancel: aranc,
					PE: pe
			},
		})
		.done(function(data) {
			console.log(data);
			console.log("success");

			$.get(consulta, function(data){
				$('#contenido').html(data);
			});/*
			
			
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		*/
		});
	});
});
