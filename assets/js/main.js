"use strict";

var cookieValue = parseInt(document.documentElement.clientHeight-250);

cookieValue = Math.floor(cookieValue/26);
document.cookie = "num=" + cookieValue;

window.onbeforeunload = function (event) {
	$('#wait_pleace').show();
}

$(document).ready( function() {
	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})	