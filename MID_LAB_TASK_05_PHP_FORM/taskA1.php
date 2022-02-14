<?php 

	
$useremail= "";
	
		if($_REQUEST['email'] == null){
			$uemailError = "email is empty....";
		}else{
			$useremail = $_REQUEST['email'];
			echo $useremail;
		}
	
?>


