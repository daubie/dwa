<div style="margin-left:200px;">

<? foreach($posts as $post): ?>
	<div style="text-align:left">
	<strong><?=$post['first_name']?> <?=$post['last_name']?> posted:</strong><br>
	<?=$post['content']?>
	<br>
		<span style="font-size:8pt"><?=date('D M,j Y  G:i',strtotime($posts['created']))?></span>
	
	<br><br>
	</div>
<? endforeach; ?>

</div>
