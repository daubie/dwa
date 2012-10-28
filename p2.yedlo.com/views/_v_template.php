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
background:#c1c1c1;
font-family:Arial, Sans-serif;
}

#wrapper {
margin:0px auto;
width:900px;
height:1000px;
background:#fff;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
text-align:center;
}

.header {
height:90px;
-webkit-border-radius: 10px 10px 0px 0px;
-moz-border-radius: 10px 10px 0px 0px;
border-radius: 10px 10px 0px 0px;
background-color:blue;
text-align:center;
line-height:90px;
font-size: 32pt;
color:#fff;
}

</style>


<body>	
	<div id="wrapper">
		<div class="header">
			<a style="color:#fff;text-decoration:none" href="/index">'scussit</a>
		</div>
		
		<?=$content;?> 
		
	</div>

</body>
</html>