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
					type: 'POST',
					url:  'send.php',
					data: $('#formLead').serialize(),
				});
				$('#modalLead').modal('hide');
			}
		});
	});

	// -- meta tags -- //

	$('#title-input').keyup(function() { //js changes live
		$('#title-user').html($(this).val());
	});

	$('#desc-input').keyup(function() { //js changes live
		$('#desc-user').html($(this).val());
	});

	$("select#robots-input").change(function(){ //js select changes live
		var thisvalue = $(this).find("option:selected").text();
		$('#robots-user').html(thisvalue);
	});

	$('#author-input').keyup(function() { //js changes live
		$('#author-user').html($(this).val());
	});

	$('#key-input').keyup(function() { //js changes live
		$('#key-user').html($(this).val());
	});

	$('#lang-input').keyup(function() { //js changes live
		$('#lang-user').html($(this).val());
	});

	// -- open graph -- //

	$('#ogtype-input').keyup(function() { //js changes live
		$('#ogtype-user').html($(this).val());
	});

	$('#ogtitle-input').keyup(function() { //js changes live
		$('#ogtitle-user').html($(this).val());
	});

	$('#ogurl-input').keyup(function() { //js changes live
		$('#ogurl-user').html($(this).val());
	});

	$('#ogimage-input').keyup(function() { //js changes live
		$('#ogimage-user').html($(this).val());
	});

	$('#ogauthor-input').keyup(function() { //js changes live
		$('#ogauthor-user').html($(this).val());
	});

	// -- twitter cards -- //

	$('#ttcard-input').keyup(function() { //js changes live
		$('#ttcard-user').html($(this).val());
	});

	$('#ttsite-input').keyup(function() { //js changes live
		$('#ttsite-user').html($(this).val());
	});

	$('#ttcreator-input').keyup(function() { //js changes live
		$('#ttcreator-user').html($(this).val());
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