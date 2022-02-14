<?php 

	
$usermale= "";




	    if(isset($_REQUEST['male'])){
		
		$usermale = "male";
		
			echo $usermale;
		}
		
	
	
		
$userfemale= "";
         if(isset($_REQUEST['female'])){
		 
     $userfemale = "female";
			echo  $userfemale ;
		}
		
	
	
$userother= "";

		if(isset($_REQUEST['other'])){
		
		$userother= "other";
			
			echo $userother;
		}
		
	
	
	

?>




<html>
<head>
	<title></title>
</head>

<body>
	    <form method="POST" action="">

<fieldset >
	

	<legend><b>GENDER</b></legend>
	   
	    <table>
       <tr>
       	<td>
		<input type="radio" name="male"   value= "usermale">Male
		<input type="radio" name="female" value="userfemale">Female
		<input type="radio" name="other"  value=" userother">Other</td>
		
	</tr>

	<tr><td colspan="3"><hr></hr></td></tr>
	<tr>
		<td> <input type="submit" name="submit" value="Submit" /> </td>
          
	</tr>
    
	</table>
 
</fieldset>

</form>

</body>

</html>