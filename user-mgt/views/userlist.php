
<?php

require('header.php');

?>

<html>
<head>
	<title>User list</title>
</head>
<body>

	<a href="../views/phome.php"> back </a> |
	  <a href="../controller/logout.php"> logout </a>
<br><br>
		
		<table border="1">
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>EMAIL</td>
				<td>ACTION</td>


			</tr>
			<?php
			$file = fopen('../models/user.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArray = explode('|', $user);
				

			
				?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>

				
				<td>
					<a href="../views/edit.php?id=<?=$userArray[0]?>"> EDIT </a> |
						<a href="../views/delete.php?id=<?=$userArray[0]?>"> DELETE </a> 
				</td>
			</tr>
			<?php
				}
			?>
			
		</table>
		
	
</body>
</html>