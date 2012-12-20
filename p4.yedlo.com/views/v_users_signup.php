
<div id="reg">

	<h1>Register at Yedlo</h1>
	
	<hr>
	
	<div id=reg_welcome">
		
		<p>
			<strong>Already registered?</strong>  <a href="/users/login">Sign in here</a></br></br>
		
			Joining Yedlo gives you free access to lots of helpful exclusive features, including:
			Log and analyze your foods and recipes 
			Store your ideal daily nutrient values to track against your actual consumption
			Customize our nutrient search to your personal preferences
		</p>

		<hr>
		
		<form method='POST' action='/users/p_signup'>
		
			<h3>Your Information</h3>

			First Name<br>
			<input type='text' name='first_name'>
			<br><br>
			
			Last Name<br>
			<input type='text' name='last_name'>
			<br><br>

			Email<br>
			<input type='text' name='email'>
			<br><br>
			
			Password<br>
			<input type='text' name='password'>
			<br><br>
			
			<hr>
			
			<h3>About You</h3>
			
			Age<br>
			<input type='text' name='birthday'>
			<br><br>
			
			Height (inches)<br>
			<input type='text' name='height'>
			<br><br>
			
			Current Weight (lbs)<br>
			<input type='text' name='weight'>
			<br><br>
			
			Goal Weight (lbs)<br>
			<input type='text' name='gweight'>
			<br><br>
			
			Sex<br>
			<input type='radio' value="male" name='gender'>Male
			<input type='radio' value="female" name='gender'>Female
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