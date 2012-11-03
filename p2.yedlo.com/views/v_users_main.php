this is the main screen for when you login

	<a class="nav" href='/posts/users/'>Change who you're following</a>
	
	<div style="margin-left:200px;">


	<?foreach($posts as $post):?>
	
		<h2><?=$post['first_name']?> <?=$post['last_name']?> posted:</h2>
		<?=$post['content']?>
	
		<br><br>
	
	<?endforeach;?>

</div>
