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

/*function subLead(){
	$('#enviar').on('click', function (e) {
		
	});
}*/

$(window).submit(function(event) {
	if (validateField()) {
		alert("Preencha com um e-mail válido");
		event.preventDefault();
	} else {
		$.ajax({
			type: 'post',
			url:  'api.php',
			data: $('form').serialize(),
		});
		$('#modalLead').modal('hide');
	}
});

/*	$('#formLead').click('#enviar', function (e) {
		e.preventDefault();
		$.ajax({
			type: 'post',
			url:  'http://localhost/tag-gen-app/api.php',
			data: $('#formLead').serialize(),
		});
	});*/
/*
$("#submit").click(function() {
	if (verificaCampos()) {
		alert("Preencha os campos vazios.");
	} else {
		enviaDados();
	}
});*/

/*$(function () {
	$('form').on('submit', function (e) {
		e.preventDefault();
		if (validateField()) {
			alert("Preencha com um e-mail válido");
			event.preventDefault();
		} else {
			$.ajax({
				type: 'post',
				url: 'con.php',
				data: $('form').serialize(),
				success: function () {
					alert('form was submitted');
				}
			});
			$('#modalLead').modal('hide');
		}
	});
});*/