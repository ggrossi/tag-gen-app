$(window).on('load',function(){

	if (document.cookie.replace(/(?:(?:^|.*;\s*)doSomethingOnlyOnce\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
		$('#modalLead').modal('show'); //show modal

		$(function(){ //validate and send data to hubspot
			$('#formLead').on('submit', function(e){
				if (verificaCampos()) {
					alert("Preencha os campos corretamente.");
					e.preventDefault();
				} else {
					$.ajax({
						type: 'post',
						url:  'send.php',
						data: $('#formLead').serialize(),
					});
					e.preventDefault();
					$('#modalLead').modal('hide');
					document.cookie = "doSomethingOnlyOnce=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
				}
			});
		});
	}

});

function verificaCampos(){ //check if email field is correctly filled

	var email = document.forms["formLead"]["email"].value;

	if (email.length <= 5) {
		return true;
	} else {
		return false;
	}

}

// -- tooltip -- //
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$(function() {
	// -- meta tags -- //

	$('#url-input').keyup(function() { //js changes live
		$('#url-preview').html($(this).val());
	});

	$('#title-input').keyup(function() { //js changes live
		$('#title-user').html($(this).val());
		$('#title-preview').html($(this).val());
	});

	$('#desc-input').keyup(function() { //js changes live
		$('#desc-user').html($(this).val());
		$('#desc-preview').html($(this).val());
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

	$("select#lang-input").change(function(){ //js select changes live
		var thisvalue = $(this).find("option:selected").val();
		$('#lang-user').html(thisvalue);
	});

	// -- open graph -- //

	$('#ogtype-input').keyup(function() { //js changes live
		$('#ogtype-user').html($(this).val());
		$('#ogtype-user-preview').html($(this).val());
	});

	$('#ogtitle-input').keyup(function() { //js changes live
		$('#ogtitle-user').html($(this).val());
		$('#ogtitle-user-preview').html($(this).val());

	});

	$('#ogurl-input').keyup(function() { //js changes live
		$('#ogurl-user').html($(this).val());
		$('#ogurl-user-preview').html($(this).val());
	});

	$('#ogimageInput').keyup(function() { //js changes live
		var selecionada = $('#ogimageInput').val();
    	$('#ogimgUserPreview').attr("src", selecionada);
		$('#ogimage-user').html($(this).val());
	});

	$('#ogauthor-input').keyup(function() { //js changes live
		$('#ogauthor-user').html($(this).val());
		$('#ogauthor-user-preview ').html($(this).val());
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

	// -- progress bar title -- // 
	$("#title-input[maxlength]").each(function() {
		var $this = $(this);
		var maxLength = parseInt($this.attr('maxlength'));
		$this.attr('maxlength', null);

		var el = document.getElementById("progress-title");

		$this.bind('keyup', function() {
			var cc = $this.val().length;

			el.style.width = (1.5872 * cc) + '%';

			if (cc > 63) {
				el.classList.remove("bg-success");
				el.classList.add("bg-danger");
			} else if (cc <= 63) {
				el.classList.add("bg-success");
				el.classList.remove("bg-danger");
			}
		});
	});

	// -- progress bar description -- //
	$("#desc-input[maxlength]").each(function() {
		var $this = $(this);
		var maxLength = parseInt($this.attr('maxlength'));
		$this.attr('maxlength', null);

		var el = document.getElementById("progress-description");

		$this.bind('keyup', function() {
			var cc = $this.val().length;

			el.style.width = (0.625 * cc) + '%';

			if (cc > 160) {
				el.classList.remove("bg-success");
				el.classList.add("bg-danger");
			} else if (cc <= 160) {
				el.classList.add("bg-success");
				el.classList.remove("bg-danger");
			}
		});
	});

});