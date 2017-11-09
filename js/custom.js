$(window).on('load',function(){
	$('#modalLead').modal('show'); //show modal 

	$(function(){ //validate and send data to hubspot
		$('#formLead').on('submit', function(e){
			if (verificaCampos()) {
				alert("Preencha os campos corretamente.");
				e.preventDefault();
			} else {
				e.preventDefault();
				$.ajax({
					url: 'api.php', //submit URL
					type: 'POST',
					data: $('#formLead').serialize() //all form data
				});
				$('#modalLead').modal('hide');
			}
		});
	});

	$('#nome-pag').keyup(function() { //js changes live
		$('#nome-pag-user').html($(this).val());
	});

	$('#desc-pag').keyup(function() { //js changes live
		$('#desc-pag-user').html($(this).val());
	});

	$("select#index-pag").change(function(){ //js select changes live
		var thisvalue = $(this).find("option:selected").text();
		$('#index-pag-user').html(thisvalue);
	});

	$('#autor-pag').keyup(function() { //js changes live
		$('#autor-pag-user').html($(this).val());
	});
});

function verificaCampos(){ //check if email field is correctly filled

	var email = document.forms["formLead"]["email"].value;

	if (email.length <= 5) {
		return true;
	} else {
		return false;
	}

}