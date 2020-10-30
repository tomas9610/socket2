<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<div class="container">
	
	<div class="chat"></div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	
	<script>
	$(document).ready(function(){

	$(function(){
		
		$('#message-form').submit(function(e){
			e.preventDefault();

alert('pount');
			
		});

		
	});
});

	</script>
	<form id="message-form">
	
	<input type="text" name="message" id="message" placeholder="Chat here..." />
	<button name="send" id="send" class="btn">Send</button>

</form>
</div>

</body>
</html>