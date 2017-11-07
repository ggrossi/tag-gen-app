/* -- VALIDATE FORM AND SEND TO HUBSPOT --*/
$(window).on('load',function(){
	$('#modalLead').modal('show'); //show modal 

	$(function(){
		$('#formLead').on('submit', function(e){
			if (verificaCampos()) {
				alert("Preencha os campos corretamente.");
				e.preventDefault();
			} else {
				e.preventDefault();
				$.ajax({
					url: 'api.php', //submit URL
					type: 'POST',
					data: $('formLead').serialize() //all form data
				});
				$('#modalLead').modal('hide');
			}
		});
	});
});
function verificaCampos(){

	var email = document.forms["formLead"]["email"].value;

	if (email.length <= 5) {
		return true;
	} else {
		return false;
	}

}

/* -- GENERATOR --*/

