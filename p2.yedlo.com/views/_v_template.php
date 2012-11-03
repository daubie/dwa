<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/views/css/main.css">	
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
</head>

<body>	<div class="top"><!-- --></div>
	
	<div id="nav">
		
		<div id="logo"><!-- --></div>

		<div id="menu">
			<!-- Menu for users who are logged in -->
			<? if($user): ?>
				<a class="nav" href='/posts/'>Home</a>		
				<a class="nav" href='/users/profile'>Profile</a>
				<a class="nav" href='/users/logout'>Logout</a>
			
			<!-- Menu options for users who are not logged in -->	
			<? else: ?>
			
				Please <a href='/users/signup'>Sign up</a> or <a href='/users/login'>Log in</a> to continue.
			
			<? endif; ?>
			</div>
			<div style="clear:both"><!-- --></div>
	</div>
			<div id='wrapper'>
			<?=$content;?> 

		</div>

	<div class="footer"><!-- --></div>	
</body>
</html>