

<h2><?=$user->username?>'s profile</h2><br>
		
		<div style="float:left;margin-right:10px;">
			<img src="<?=$user->gender?>">
		</div>
		<div style="float:left;text-align:left">
			<strong>Name: <?=$user->first_name?></strong><strong><?=$user->last_name?></strong><br>
			<strong>Location: <?=$user->location?></strong><br>
			<strong>Email: <?=$user->email?></strong><br>
			<strong>Bio: <?=$user->bio?></strong><br>

		</div>
		
		<div style="clear:both"><!-- --></div>

	