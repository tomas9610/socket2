<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<div class="container">
	
	<div class="chat"></div>
	
	<form id="message-form">
	
		<input type="text" name="message" id="message" placeholder="Chat here..." />
		<button name="send" id="send" class="btn">Send</button>
	
	</form>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script>
	
	var keypress_count = 0;	
	var conn = new WebSocket('ws://157.230.181.208:8080');
	
	conn.onopen = function(e){
	
	    console.log("Connection established!");
	    
	};
	
	conn.onmessage = function(e){
			
		addMessage(e.data);
	    
	};
	
	$(function(){
		
		$('#message-form').submit(function(e){
			keypress_count = 0;	
			e.preventDefault();
			alert('pount');
			
			var el = $('#message');
			var message = el.val();
			
			var messageData = {
				'id': '123',
				'userId': '12334',
				'content': message
			}
			
			var messageDataJson = JSON.stringify(messageData);
			
			conn.send(messageDataJson);
			el.val('');
			$('.chat').append('<div class="chat-message2">' +  message + '</div>');	 
			addMessage(message);
			
		});

		
	});
	function addMessage(message)
	{
			var obj = JSON.parse(message);
			var send_message = obj.content;
			
				$('.chat').append('<div class="chat-message">' +  send_message + '</div>');	 
		
	}
	
	</script>

</div>

</body>
</html>