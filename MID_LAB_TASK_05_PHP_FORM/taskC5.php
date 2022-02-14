<?php 

		
	
$user= "";

	    if(isset($_REQUEST['submit'])){
		
		$user = $_REQUEST['bg1'];
		
			//echo $user;
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
		   	<option  value="A+" <?php if(isset($_REQUEST['bg1']) && $_REQUEST['bg1']=='A+') echo "selected='selected'"?> > A+ </option>
		   	<option  value="O-" <?php if(isset($_REQUEST['bg1']) && $_REQUEST['bg1']=='O-') echo "selected='selected'"?> >O-</option>
		   	<option  value="O+" <?php if(isset($_REQUEST['bg1']) && $_REQUEST['bg1']=='O+') echo "selected='selected'"?> >O+</option>
		   	<option  value="A-" <?php if(isset($_REQUEST['bg1']) && $_REQUEST['bg1']=='A-') echo "selected='selected'"?> >A-</option>
		   	<option  value="B+" <?php if(isset($_REQUEST['bg1']) && $_REQUEST['bg1']=='B+') echo "selected='selected'"?> >B+</option>
		   	<option  value="B-"<?php if(isset($_REQUEST['bg1']) && $_REQUEST['bg1']=='B-') echo "selected='selected'"?> >B-</option>
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