<?php

require('header.php');

?>

<html>
<head>
	<title>Create User</title>
</head>
<body>

	<a href="phome.php"> back </a> |
	  <a href="../controller/logout.php"> logout </a>
<br><br>
	<form method="POST" action="../controller/pregchck.php">
		<fieldset>
			<legend> Add new user</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Create"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>