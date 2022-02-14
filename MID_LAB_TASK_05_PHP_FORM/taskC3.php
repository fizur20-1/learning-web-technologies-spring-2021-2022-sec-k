
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
		<input type="radio" name="gender"   value= "usermale" <?php if(isset($_REQUEST['gender'])&& $_REQUEST['gender']== "usermale"  ) echo  
				"checked"?>>Male

		<input type="radio" name="gender" value="userfemale"  <?php if(isset($_REQUEST['gender']) && $_REQUEST['gender']== "userfemale" ) echo  
				"checked"?> >Female

		<input type="radio" name="gender"  value="userother"  <?php if(isset($_REQUEST['gender']) &&  $_REQUEST['gender']== "userother" ) echo  
				"checked"?> >Other</td>
		
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