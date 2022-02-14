<?php 

	
$username= " ";
	
		if($_REQUEST['username'] == null){
			$unameError = "username is empty....";
		}else{
			$username = $_REQUEST['username'];
			
		}
	
?>


<html>
<head>
	<title>name</title>
</head>
<body>
	<fieldset>
		<legend>NAME</legend>
	<form method="POST" action="">
		<table>
			<tr>
				
				<td><input type="text" name="username" value="<?=$username?>" ></td>
				<td> 
					
				</td>
			</tr>
			
			<tr>
			      <td><hr> </hr></td>
			 </tr>
			 <tr>  
				<td><input type="submit" name="submit" value="Submit"> </td>
			</tr>
		</table>
	</fieldset>
	</form>
</body>
</html>
