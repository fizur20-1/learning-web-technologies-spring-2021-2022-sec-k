<html>
<head>
	<title>Signup</title>
</head>
<body>
	<form method="POST" action="pregchck.php">
		<table>
			<tr> <td>Registration </td></tr>

			<tr>
				<td>
					<a href="phome.php"> Home</a> &nbsp;<a href="plogin.php">Login</a>&nbsp;
					<a href="preg.php">Registration</a>
				</td>
			</tr>
			
			<tr>
				<td>name</td>
				<td><input type="text" name="name" value=""></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>

			<tr>
				<td>User_name</td>
				<td><input type="text" name="User_name" value=""></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>

			<tr>
				<td>Confirm_Password</td>
				<td><input type="password" name="Cpassword" value=""></td>
			</tr>

			<tr>
				<td>Gender</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="gender" value="male"> Male</td>
				<td>
					<input type="radio" name="gender" value="female">Female
				</td>

				<td>
					<input type="radio" name="gender" value="other"> other 
				</td>
			</tr>

			<tr>
				<td> Date_of_Birth</td>
			</tr>

			<tr>
				<td> <input type="number" name="dob" value="" size="2px">/</td>
		
				<td> <input type="number" name="dob1" value="" size="2px">/</td>
	
				<td> <input type="number" name="dob2" value="" size="2px">(dd/mm/yyyy)</td>
				

			</tr>
			
			
			<tr>
				<td> </td>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>