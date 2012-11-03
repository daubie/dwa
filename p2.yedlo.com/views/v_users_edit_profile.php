  
<div><?=$user->username?>'s profile editor</div>
<form name="reg" action="/users/p_edit_profile" method="POST">
<table width="400" border="0" align="center" cellpadding="2" cellspacing="0">
  
  <tr>
    <td><div align="right">First Name:</div></td>
    <td><input type="text" name="first_name" value="<?=$user->first_name?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="last_name" value="<?=$user->last_name?>" /></td>
  </tr>
   <tr>
    <td><div align="right">Email:</div></td>
    <td><input type="text" name="email" value="<?=$user->email?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Gender:</div></td>
    <td>
		<input type="radio" name="gender" value="/images/avatars/male.png">Male
		<input type="radio" name="gender" value="/images/avatars/female.png">Female
	</td>
  </tr>
 <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" value="<?=$user->username?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Location:</div></td>
    <td><input type="text" name="location" value="<?=$user->location?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Bio:</div></td>
    <td><input type="text" name="bio" value="<?=$user->bio?>" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input type="submit" value="Submit" /></td>
  </tr>
</table>
</form>