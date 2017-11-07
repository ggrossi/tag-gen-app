$(window).on('load',function(){
	$('#modalLead').modal('show');
});

function validateField() {
	var email = document.forms["formLead"]["email"].value;
	if (email.length <= 5) {
		return true;
	} else {
		return false;
	}
}

$(function(){
    $('#formLead').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: 'api.php', //this is the submit URL
            type: 'POST', //or POST
            data: $('#formLead').serialize(),
            success: function(data){
                 alert('successfully submitted')
            }
        });
    });
});