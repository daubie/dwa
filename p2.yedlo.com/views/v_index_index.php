<? if(!$user): ?>
	<h2>Welcome to Scussit!</h2>
	<br>
	No muss..
	<br>
	No fuss...
	<br>
	Just discuss <br>

<? else: ?>
	Welcome back <?=$user->first_name?><br>
<? endif; ?>
