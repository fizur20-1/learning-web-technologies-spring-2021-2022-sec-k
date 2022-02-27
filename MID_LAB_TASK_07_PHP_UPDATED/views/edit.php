<?php


require('header.php');

$file = fopen('../models/user.txt', 'r');
while(!feof($file))
{	
	$user = fgets($file);
}

$userArry = explode('|', $user);
$_SESSION['current_u'] = $userArry;
fclose($file);


?>


<html>
<head>
	<title>Edit user</title>
</head>
<body>

	<a href="phome.php"> back </a> |
	  <a href="../controller/logout.php"> logout </a>
<br><br>
	<form method="POST" action="../controller/editchck.php">
		<fieldset>
			<legend> Add new user</legend>
		<table>
			<tr>
				<td>Username</td>
				<td>
	<input type="text" name="username" value= " <?= $_SESSION['current_u'][0]?> " >
	
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
	<input type="password" name="password" value="<?= $_SESSION['current_u'][1]?>">
				</td>
			</tr>
			<tr>
				<td>Email</td>
	<td><input type="email" name="email" value="<?= $_SESSION['current_u'][2]?>">  			</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>