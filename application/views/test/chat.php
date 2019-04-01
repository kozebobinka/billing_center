<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<title>ЖКГ: Розрахунковый центр</title>
		<link rel="icon" href="<?=site_url('favicon.ico')?>" type="image/x-icon" />
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
	</head>
	
	<body>
		<div class="container mt-5">
			<textarea class="chat form-control" rows="20"></textarea>
			<input class="message form-control mt-3"></input>
		</div>
	</body>
</html>

<script>
	"use strict";
	
	$(document).ready( function() {
		$('.message').keydown(function(e) {
			if(e.keyCode === 13) {
				$('.chat').text($('.chat').text() + $('.message').val() + "\n-------\n");
				$('.message').val('');
			}
		});
	})
	
</script>
