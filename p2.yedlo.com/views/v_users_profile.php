

<h1>This is the profile of <?=$user->first_name?></h1>

<div>
<img src="<?=$user->picture?>">

<form action="/users/p_profile" method="POST"
enctype="multipart/form-data">
<label for="file">Avatar:</label>
<input type="file" name="avatar" id="file" /> 
<br />
<input type="submit" value="Submit" />
</form>
</div>