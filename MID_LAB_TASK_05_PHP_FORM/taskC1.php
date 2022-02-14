<?php 

	
$useremail= " ";
	
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['email'] == null){
			$uemailError = "email is empty....";
		}else{
			$useremail = $_REQUEST['email'];
			//echo $useremail;
		}
	}
	else echo " ";
?>





<html>
<head>
	<title>Email</title>
</head>
<body>
	<fieldset>
		<legend>EMAIL</legend>
	<form method="POST" action="">
		<table>
			<tr>
				
				<td><input type="Email" name="email" value="<?=$useremail?>" ></td>
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
