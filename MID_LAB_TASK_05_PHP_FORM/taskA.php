<?php 

	
$username= " ";
	
		if($_REQUEST['username'] == null){
			$unameError = "username is empty....";
		}else{
			$username = $_REQUEST['username'];
			echo $username;
		}
	
?>


