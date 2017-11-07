$(window).on('load',function(){
	$('#modalLead').modal('show');

	$(function(){
	    $('form').on('submit', function(e){
	        e.preventDefault();
	        $.ajax({
	            url: 'api.php', //this is the submit URL
	            type: 'POST', //or POST
	            data: $('form').serialize(),
	            success: function(data){
	                 alert("ok");
	            }
	        });
	    });
	});
});

/*function enviaDados(){
	$('form').click('submit', function (e) {
		e.preventDefault();
		$.ajax({
			type: 'post',
			url:  'api.php',
			data: $('form').serialize(),
		});
	});
}

$("#enviar").click(function() {
	if (verificaCampos()) {
		alert("Preencha os campos vazios.");
	} else {
		enviaDados();
	}
});*/