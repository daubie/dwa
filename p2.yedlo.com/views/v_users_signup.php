<form name="signup_form" action="/users/p_signup" method="POST">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="first_name" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="last_name" /></td>
  </tr>
   <tr>
    <td><div align="right">Email:</div></td>
    <td><input type="text" name="email"/></td>
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
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right">Location:</div></td>
    <td><input type="text" name="location" /></td>
  </tr>
  <tr>
    <td><div align="right">Bio:</div></td>
    <td><textarea cols=19 rows=10 name="bio"></textarea></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input type="submit" value="Submit" /></td>
  </tr>
</table>
</form>

