
<?php

require('../header.php');

?>

<html>
<head>
	<title>User list</title>
</head>
<body>

	<a href="phome.php"> back </a> |
	  <a href="../../controller/manager/logout.php"> logout </a>
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
			$file = fopen('../../models/user.txt', 'r');
			
			while(!feof($file)){

				$user = fgets($file);
				$userArray = explode('|', $user);
				
                if( $userArray[0] != null && $userArray[1] != null &&$userArray[2] != null &&$userArray[3] != null )
			{
				?>
			

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>

				
				<td>
					<a href="../../views/manager/edit.php?id=<?=$userArray[0]?>"> EDIT </a> |
						<a href="../../views/manager/delete.php?id=<?=$userArray[0]?>"> DELETE </a> 
				</td>
			</tr>
			<?php
		}
				}
			?>
			
		</table>
		
	
</body>
</html>