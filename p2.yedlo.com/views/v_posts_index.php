<div style="text-align:left;float:left;margin-right:100px;">
	<a class="nav" href='/posts/add'>Add a new post</a><br>
	<a class="nav" href='/posts/users/'>Change who you're following</a><br>
	<a class="nav" href='/users/edit_profile'>Edit your Info</a><br>
	<a class="nav" href='/users/profile/'>View your Profile</a><br>
</div>
<div style="text-align:left;float:left">


	<?foreach($posts as $post):?>
		<div style="float:left;margin-right:10px;">
		<img src="<?=$post['gender']?>">
		</div>
		<div style="float:left;width:300px">
		<strong><?=$post['username']?> posted:</strong><br>
		<?=$post['content']?><br>
		<span style="font-size:8pt;font-style:italic"><?=Time::display($post['created'])?></span>
	
		<br><br>
		</div>
		<div style="clear:both"><!-- --></div>
		<hr>
	<?endforeach;?>

</div>

<div style="clear:both"><!-- --></div>

