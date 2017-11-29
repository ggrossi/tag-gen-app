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
					date = new Date();
        			date.setTime(date.getTime()+(30*24*60*60*1000));
        			expires = "; expires="+date.toGMTString();
					document.cookie = "doSomethingOnlyOnce=true; expires=" + expires;
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

	// -- Analytics, Bootstrap e Google TagManager -- //
	$("#tagmng-code1").hide();
	$("#tagmng-code2").hide();
	$("#tagmng-input").each(function() {
		var $this = $(this);
		var el = document.getElementById("tagmng-code1");
		var el2 = document.getElementById("tagmng-code2");

		$this.bind('keyup', function() {
			var cc = $this.val().length;

			if (cc > 0) {
				el.style.display = "block";
				el2.style.display = "block";
				$('#tagmng-user1').html($('#tagmng-input').val());
				$('#tagmng-user2').html($('#tagmng-input').val());

			} else {
				el.style.display = "none";
				el2.style.display = "none";
			}
		});
	});

	$("#analytics-code").hide();
	$("#analytics-input").each(function() {
		var $this = $(this);
		var el = document.getElementById("analytics-code");

		$this.bind('keyup', function() {
			var cc = $this.val().length;

			if (cc > 0) {
				el.style.display = "block";
				$('#analytics-user1').html($('#analytics-input').val());
				$('#analytics-user2').html($('#analytics-input').val());

			} else {
				el.style.display = "none";
			}
		});
	});

	$("#bootstrap-code").hide();
	$('#bootstrap-check').change(function(){
		var check = document.getElementById("bootstrap-check").checked;
		if (check) {
			$("#bootstrap-code").show();
		} else {
			$("#bootstrap-code").hide();
		}
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

	$('#copy-code-btn').on('click', function(e){
		let textarea = document.createElement('textarea');
		textarea.id = 't';
		textarea.style.height = 0;
		document.body.appendChild(textarea);
		textarea.value = document.getElementById('code-copy').innerText;
		let selector = document.querySelector('#t');
		selector.select();
		document.execCommand('copy');
		document.body.removeChild(textarea);
		e.preventDefault();
	});


});