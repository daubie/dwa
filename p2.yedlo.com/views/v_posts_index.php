<div style="margin-left:200px;">

<? foreach($posts as $post): ?>
	<div style="text-align:left">
	<img src="<?=$post['picture']?>">
	<strong><?=$post['username']?> posted:</strong><br>
	<?=$post['content']?>
	<br>
		<span style="font-size:8pt"><?=date('D M,j Y  G:i',strtotime($post['created']))?></span>
	
	<br><br>
	</div>
<? endforeach; ?>

</div>
