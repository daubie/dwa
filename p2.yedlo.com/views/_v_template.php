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
width:900px;
margin:25px auto;
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

.nav {
margin-right:20px;
}

a:link {color:yellow;text-decoration:none;}      /* unvisited link */
a:visited {color:yellow;text-decoration:none;}  /* visited link */
a:hover {color:yellow;text-decoration:underline;}  /* mouse over link */
a:active {color:yellow;text-decoration:underline;}  /* selected link */

</style>


<body>	<div class="header"><!-- --></div>
	<div id='wrapper'>

		<!-- Menu for users who are logged in -->
		<? if($user): ?>
			<a class="nav" href='/users/main'>Main</a>			
			<a class="nav" href='/posts/add'>Add a new post</a>
			<a class="nav" href='/posts/'>View posts</a>
			<a class="nav" href='/posts/users/'>Change who you're following</a>
			<a class="nav" href='/users/profile'>Profile</a>
			<a class="nav" href='/users/logout'>Logout</a>
		
		<!-- Menu options for users who are not logged in -->	
		<? else: ?>
		
			Please <a href='/users/signup'>Sign up</a> or <a href='/users/login'>Log in</a> to continue.
		
		<? endif; ?>
		<br>
		<br>
		<?=$content;?> 
	
	<br>
	<br>
		


	</div>
	<div class="footer"><!-- --></div>	
</body>
</html>