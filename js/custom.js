$(window).on('load',function(){
	$('#modalLead').modal('show');
});

function validateField() {
	var email = document.forms["form"]["email"].value;
	if (email.length <= 5) {
		return true;
	} else {
		return false;
	}
}

/*function checkEmail(email) {
	var emailFilter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
	if (!email.value.match(emailFilter)) {
		alert("Insira um endereço de e-mail válido.");
		email.value = "";
	}
}*/

function enviaDados() {
	$('form').submit(function(e) {
		e.preventDefault();
		if (validateField()) {
			alert("Ops");
			e.preventDefault();
		} else {
			$.ajax({
				type: 'post',
				url: 'con.php',
				data: $('form').serialize(),
			});
			preventDefault();
			$('#modalLead').modal('hide');
		}
	});
}