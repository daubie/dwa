<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/css/main.css">	
				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	

</head>

<body onload="bmr()">	

	<div id="mainWrap">
		
		<div style="width:1024px;margin:0px auto;height:100px;">
			<a href="/" style="border:none;float:left"><img style="margin:10px;" src="/images/yedlo_logo.png" /></a>
			<? if($user) : ?>
			<span style="float:right;margin-top:60px;margin-right:25px;"><strong>Welcome back, <?=$user->first_name?></strong></span> 
			<? else: ?>
			<span style="float:right;margin-top:60px;margin-right:25px;"><strong>Welcome to Yedlo! Create an account now!</strong></span> 
			<? endif ?>
			<div id="clear:both"><!-- --></div>		
		</div>
		
		<div id="nav">
			<div class="log">
			<!-- Menu for users who are logged in -->
			<? if($user): ?>
				<a class="menu" href='/posts/'>Home</a>		
				<a class="menu" href='/users/profile'>Profile</a>
				<a class="menu" href='/users/logout'>Logout</a>
			
			<!-- Menu options for users who are not logged in -->	
			<? else: ?>
				<a style="color:white" href='/users/signup'>Register</a> | <a style="color:white"  href='/users/login'>Sign in</a>

			<? endif; ?>
			</div>
		
			<span class="menu">
			<a href="/about">About</a>
			</span>
			<span class="menu">
			<a href="/food">Food</a>
			</span>
			<span class="menu">
			<a href="/exercise">Exercise</a>
			</span>
			<span class="menu">
			<a href="/calculators.php">Calculators</a>
			</span>

		</div>

		<div id="content">
		<?=$content;?> 
		</div>


	</div>


</body>
</html>