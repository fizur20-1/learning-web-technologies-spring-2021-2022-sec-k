<?php 

		
	
$userssc= "";

	    if(isset($_REQUEST['SSC'])){
		
		$userssc = "SSC";
		
			//echo $userssc;
		}

$userhsc= "";
         if(isset($_REQUEST['HSC'])){
		 
     $userhsc = "HSC";
			//echo  $userhsc ;
		}
		
	
	
$userbsc= "";

		if(isset($_REQUEST['BSc'])){
		
		$userbsc= "BSc";
			
			//echo $userbsc;
		}
		
	$usermsc= "";

		if(isset($_REQUEST['MSc'])){
		
		$usermsc= "MSc";
			
			//echo $usermsc;
		}
		
	

	
?>

<html>
<head>
	<title></title>
</head>

<body>
	    <form method="POST" action="">

<fieldset >
	

	<legend><b>DEGREE</b></legend>
	   
	    <table>
       <tr>
		<td>    <input type="checkbox" name="SSC" value="SSC"  <?php if(isset($_REQUEST['SSC']) ) echo 'checked= 
				"checked "'?>>SSC

				<input type="checkbox" name="HSC" value="HSC" <?php if(isset($_REQUEST['HSC'])) echo 'checked= 
				"checked "'?>>HSC
				<input type="checkbox" name="BSc" value="BSc" <?php if(isset($_REQUEST['BSc'])) echo 'checked= 
				"checked "'?>>BSc
				<input type="checkbox" name="MSc" value="MSc" <?php if(isset($_REQUEST['MSc'])) echo 'checked= 
				"checked "'?>>MSc
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
