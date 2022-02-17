
<html>
<head>	
	<title>profile</title>
</head>


<body>

	<form method="POST"   action="editprofilechck.php" >

	<p> logged in as </p><a href="vprofile.php"> Bob </a>
	<a href="logout.php"> |&nbsp;Logout</a>
	
	<h1>view_profile </h1> 
</br>
	<a href="dashboard.php"> dashboard </a> </br>
	<a href="vprofile.php"> view_profile </a> </br>
	<a href="editprofile.php"> Edit_profile </a> </br>
	<a href="changepp.php"> change_Profile_Pictire </a></br>
	<a href="changepass.php"> Change_Password </a> </br>
	<a href="logout.php"> logout </a> </br>

	<table>
		<tr>
				<td>name</td>
				<td><input type="text" name="name" value=" "></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
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
				
			</tr>

	</table>
</form>
</body>
</html>


