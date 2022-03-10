<?php

$id = $_GET['id'];

?>


<html>
<head>
	<title>Signup</title>
</head>
<body>
	<form method="POST" action="../controller/pregchck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
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
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>