<?php 

		
	
$user= "";

	    if(isset($_REQUEST['submit'])){
		
		$user = $_REQUEST['bg1'];
		
			echo $user;
		}

	

	
?>


 <html>
<head>
	<title></title>
</head>

<body>
	    <form method="POST" action="">

<fieldset >
	

	<legend><b>BLOOD GROUP</b></legend>
	   
	    <table>
       <tr>
		<td> Blood Group 
		   <select name ="bg1" >
		   	<option  value="A+">A+</option>
		   	<option  value="O-">O-</option>
		   	<option  value="O+">O+</option>
		   	<option  value="A-">A-</option>
		   	<option  value="B+">B+</option>
		   	<option  value="B-">B-</option>
		   </select>
		</td>
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