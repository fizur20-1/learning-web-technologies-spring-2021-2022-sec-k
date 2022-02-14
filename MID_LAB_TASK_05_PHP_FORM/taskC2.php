<?php 

	
$usermm= "";
	
	if(isset($_REQUEST['mm'])){
		if($_REQUEST['mm'] == null){
			$ummError = "month is empty....";
		}else{
			$usermm = $_REQUEST['mm'];
			//echo $usermm."/";
		}
	}
	else echo " ";

$userdd= "";
	if(isset($_REQUEST['dd'])){
		if($_REQUEST['dd'] == null){
			$uddError = "day is empty....";
		}else{
			$userdd = $_REQUEST['dd'];
			//echo $userdd."/";
		}
	}
	else echo " ";


$useryyyy= "";
	
	if(isset($_REQUEST['yyyy'])){
		if($_REQUEST['yyyy'] == null){
			$uyyyyError = "year is empty....";
		}else{
			$useryyyy = $_REQUEST['yyyy'];
			//echo $useryyyy;
		}
	}
	else echo " ";
	
?>





<html>
<head>
	<title></title>
</head>

<body>
	    <form method="POST" action="">

<fieldset >
	

	<legend><b>DATE OF BIRTH</b></legend>
	   
	    <table>

		<tr>
		<td><center>mm</center></td><td><center>dd</center></td><td> <center>yyyy</center></td>
	    </tr>
	     <tr>

		<td> <input type="digit" name="mm" value="<?=$usermm?>" size="3px">/</td>
		
		<td> <input type="digit" name="dd" value="<?=$userdd?>"size="3px">/</td>
	
		<td> <input type="digit" name="yyyy" value="<?=$useryyyy?>"size="3px"></td>
		
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
