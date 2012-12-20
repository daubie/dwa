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
	
<style type="text/css">

body {
font-family:arial, sans-serif;
font-size:10pt;
}

#mainWrap {
width:1024px;
margin:0px auto;
}

#nav {
margin:0px auto;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
background-color:#39305e;
width:1000px;
height:30px;
padding-right:20px;
}

#nav a:link {color:#fff;text-decoration:none;}
#nav a:visited {color:#fff;text-decoration:none;}
#nav a:hover {color:#fff;text-decoration:underline;}
#nav a:active {color:#fff;text-decoration:none;} 

.log {
color:#fff;
float:right;
padding-right:40px;
line-height:30px;
}

.menu{
color:#fff;
float:right;
padding-right:20px;
line-height:30px;
}

#content {
padding-left:25px;
}

#reg {
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border:1px solid #000;
width: 600px;
margin-top:50px;
padding:10px;
float:left;
}

#signIn {
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border:1px solid #000;
width: 320px;
height:200px;
margin-top:50px;
padding:10px;
float:left;
}

#notRegd {
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border:1px solid #000;
width: 300px;
margin-top:50px;
padding:10px;
float:left;
margin-left:25px;
height:200px;
}

#title {
text-align:left;
margin-top:20px;
margin-left:10px;
margin-right:10px;
width:40%;
float:left;
font-size:16pt;
font-weight:bold;
}

#todaysRecPic {
float:left;
width:50%;
border:1px solid black;
}

#mainBar {
margin-top:25px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
padding:25px;
width:500px;
background-color:#ffff99;
border:1px solid black;
float:left;
}

#sideBar {
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
margin-top:25px;
margin-left:50px;
float:left;
width:300px;
border:1px solid black;
height:500px;
 
 }
</style>
	
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