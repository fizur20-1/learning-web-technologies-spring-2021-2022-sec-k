<?php

session_start()

//$user1 = $_SESSION['user'];
        



?>
<html>
<head>	
	<title>profile</title>
</head>
<body>

	<p> logged in as </p><a href="phome.php"> Bob </a>
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
		<td>
			<p>Profile</p>
		</td>
	</tr>

	<tr>
		<td>
			Name &nbsp; :&nbsp; <?php $user1 = $_SESSION['user']; echo  $user1['name']?>  
		</td>
	</tr>

	<tr>
		<td>
			Email &nbsp; :&nbsp; <?php echo $user1['email']?>  
		</td>
	</tr>
	<tr>
		<td>
			Gender &nbsp; :&nbsp; <?php  echo $user1['gender']?>  
		</td>
	</tr>
    <tr>
		<td>
			Date Of birth &nbsp; :&nbsp; <?php echo $user1['dob']."/".$user1['dob1']."/".$user1['dob2'] ?>  
		</td>
	</tr>
	<tr>
		<td>
			<a href="changepp.php"> Change </a> </br>
		</td>
	</tr>
	 <tr>
		<td>
			<a href="vprofile.php"> view_profile </a> </br>
		</td>
	</tr>


</table>


</body>
</html>