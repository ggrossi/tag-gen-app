$(window).on('load',function(){


	if (document.cookie.replace(/(?:(?:^|.*;\s*)doSomethingOnlyOnce\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") { //se nao reconhece cookie existente no navegador
		$('#modalLead').modal('show'); //... entao mostra o modal

		$(function(){
			$('#formLead').on('submit', function(e){ //submit to hubspot
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
					$('#modalLead').modal('hide'); //esconde o modal após seu preenchimento
					date = new Date();
        			date.setTime(date.getTime()+(30*24*60*60*1000));
        			expires = "; expires="+date.toGMTString(); //define prazo de expiração do cookie
					document.cookie = "doSomethingOnlyOnce=true; expires=" + expires; //define um cookie para o navegador
				}
			});
		});
	}

});

//check if email field is correctly filled
function verificaCampos(){ 

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
	$('#url-input').keyup(function() {
		$('#url-preview').html($(this).val());
	});

	$('#title-input').keyup(function() {
		$('#title-user').html($(this).val());
		$('#title-preview').html($(this).val());
	});

	$('#desc-input').keyup(function() {
		$('#desc-user').html($(this).val());
		$('#desc-preview').html($(this).val());
	});

	$("select#robots-input").change(function(){
		var thisvalue = $(this).find("option:selected").text();
		$('#robots-user').html(thisvalue);
	});

	$('#author-input').keyup(function() {
		$('#author-user').html($(this).val());
	});

	$('#key-input').keyup(function() {
		$('#key-user').html($(this).val());
	});

	$("select#lang-input").change(function(){
		var thisvalue = $(this).find("option:selected").val();
		$('#lang-user').html(thisvalue);
	});

	// -- open graph -- //
	$('#ogtitle-input').keyup(function() {
		$('#ogtitle-user').html($(this).val());
		$('#ogtitle-user-preview').html($(this).val());

	});

	$('#ogurl-input').keyup(function() {
		$('#ogurl-user').html($(this).val());
		$('#ogurl-user-preview').html($(this).val());
	});

	$('#ogimageInput').keyup(function() {
		var selecionada = $('#ogimageInput').val();
    	$('#ogimgUserPreview').attr("src", selecionada);
		$('#ogimage-user').html($(this).val());
	});

	$('#ogauthor-input').keyup(function() {
		$('#ogauthor-user').html($(this).val());
		$('#ogauthor-user-preview ').html($(this).val());
	});

	// -- twitter card -- //
	$('#ttcard-input').keyup(function() {
		$('#ttcard-user').html($(this).val());
	});

	$('#ttsite-input').keyup(function() { 
		$('#ttsite-user').html($(this).val());
	});

	$('#ttcreator-input').keyup(function() { 
		$('#ttcreator-user').html($(this).val());
	});

	// -- Analytics, Bootstrap e Google TagManager -- //

	// -- include tag manager code -- //
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

	// -- include analytics code -- //
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

	// -- include bootstrap code -- //
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

	// -- copy btn -- //
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