<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<title>Workman</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
		
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	
	</head>
	
	<body>
		<div class="container mt-5">
			<h4 class="text-danger"></h4>
		</div>
		<div class="container mt-5">
			<textarea class="chat form-control" rows="20"></textarea>
		</div>
		<div class="container mt-5">
			<a href="https://workman.info-gkh.com.ua/test.php" target="_blank">Для теста отправлять сообщения отсюда</a>
		</div>
		<div class="container mt-5">
			<button type="button" class="btn btn-danger" id="subscribe">Следить за изменениями</button>
		</div>
		<div class="container mt-5">
			<h5>ВАШ TOKEN:</h5>
			<span id='token'></span>
		</div>
		
		<script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>
		<script src="https://workman.info-gkh.com.ua/workman.js"></script>
		
		<script>
			
			"use strict";
			
			// Идентификатор пользователя. Лучше постараться делать что-то уникальное и с намеком из какого он модуля, типа sip_vasya и ads_petya
			var user = 'tester01';
			
			// Действия при получении сообщения		
			function on_message_come(message)
			{
				$('.chat').text($('.chat').text() + message.notification.body + "\n-------\n");		
			}
			
			// Действие если не получается соединиться		
			function on_connection_error()
			{
				$('h4').html('Сервер не запущен. Запуск:<br><code>php /home/infogkhc/public_html/workman-websocket/server.php start</code>');
			}
			
			// Отправка токена на сервер
			function sendTokenToServer(currentToken) {	
				$('#token').html(currentToken);
				
				if (!isTokenSentToServer(currentToken)) {
					var url = ''; // адрес скрипта на сервере который сохраняет ID устройства
					$.post(url, {
						token: currentToken
					});		
					setTokenSentToServer(currentToken);
				}
			}
			
			// workman(user);
			
		</script>
		
	</body>
</html>

