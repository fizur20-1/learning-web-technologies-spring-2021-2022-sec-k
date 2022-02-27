
<?php

require('header.php');

?>

<html>
<head>
	<title>User list</title>
</head>
<body>

	<a href="phome.php"> back </a> |
	  <a href="../controller/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>EMAIL</td>
				<td>PASSWORD</td>
				<td>ACTION</td>


			</tr>
			<tr>
				<td>1</td>
				<td>fahim</td>
				<td>fahim@gmail.com</td>
				<td>aaa</td>
				<td>
					<a href="edit.php"> EDIT </a> |
					<a href="delete.php"> DELETE </a> 
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>zz</td>
				<td>abc@gmail.com</td>
				<td>aaa</td>
				<td>
					<a href="edit.php"> EDIT </a> |
					<a href="delete.php"> DELETE </a> 
				</td>
			</tr>
			
		</table>
		
	
</body>
</html>