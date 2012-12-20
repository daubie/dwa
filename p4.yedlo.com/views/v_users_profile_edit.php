<div id="reg">

	<h1>Edit Your Profile <?=$user->first_name?></h1>
	
	<hr>
	
	<div id=reg_welcome">

		
		<form method='POST' action='/users/p_edit_profile'>
		
			<h3>Your Information</h3>

			First Name<br>
			<input type="text" name="first_name" value="<?=$user->first_name?>" />
			<br><br>
			
			Last Name<br>
			<input type='text' name='last_name' value="<?=$user->last_name?>" />
			<br><br>

			Email<br>
			<input type='text' name='email' value="<?=$user->email?>" />
			<br><br>
			
			Password<br>
			<input type='text' name='password' value="<?=$user->password?>" />
			<br><br>
			
			<hr>
			
			<h3>About You</h3>
			
			Age<br>
			<input type='text' name='birthday' value="<?=$user->birthday?>" />
			<br><br>
			
			Height (inches)<br>
			<input type='text' name='height' value="<?=$user->height?>" />
			<br><br>
			
			Weight (lbs)<br>
			<input type='text' name='weight' value="<?=$user->weight?>" />
			<br><br>
			
			
			Activity Level<br>
			<select name="activity">
				<option value="sedentary" selected>-- Select --</option>
				<option value="sedentary">Sedentary</option>
				<option value="light">Light</option>
				<option value="moderate">Moderate</option>
				<option value="heavy">Heavy</option>
			</select>
			
			<input type='submit'>

		</form> 


	</div>