$(window).on('load',function(){
	$('#modalLead').modal('show');

	$(function(){
		$('form').on('submit', function(e){
			if (verificaCampos()) {
				alert("Preencha os campos corretamente.");
			} else {
				e.preventDefault();
				$.ajax({
					url: 'api.php', //this is the submit URL
					type: 'POST', //or POST
					data: $('form').serialize(),
					success: function(data){
						alert("ok");
					}
				});
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