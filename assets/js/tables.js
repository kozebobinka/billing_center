$(document).ready( function() {
	
	$('.add_btn').click( function() {
		$('#edit_modal h4').html('Додати ' + $('#title_modal').val());
		$('#edit_modal').modal();
	});
	
});