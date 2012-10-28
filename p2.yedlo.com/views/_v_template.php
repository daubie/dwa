<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
</head>
<style type="text/css">
body {
font-family:Arial, Sans-serif;
color:#ffffff;
background-color:#000;
}

#wrapper {
text-align:center;
margin-top:25px;

}


.welcome {
float:right;
margin-right:25px;
}

.header {
background:url(/images/bg_top.png);
background-repeat:repeat-x;
height:122px;
}

.footer {
background:url(/images/bg_bottom.png);
background-repeat:repeat-x;
height:275px;
}

</style>


<body>	<div class="header"><!-- --></div>
	<div id='wrapper'>

		<!-- Menu for users who are logged in -->
		<? if($user): ?>
			
			<a href='/users/logout'>Logout</a>
			<a href='/posts/users/'>Change who you're following</a>
			<a href='/posts/'>View posts</a>
			<a href='/posts/add'>Add a new post</a>
		
		<!-- Menu options for users who are not logged in -->	
		<? else: ?>
		
			Please <a href='/users/signup'>Sign up</a> or <a href='/users/login'>Log in</a> to continue.
		
		<? endif; ?>
	
	
	<br>
		
		<?=$content;?> 
	<div class="footer"><!-- --></div>	
	</div>

</body>
</html>