<?php 

	
$usermm= "";
	
		if($_REQUEST['mm'] == null){
			$ummError = "day is empty....";
		}else{
			$usermm = $_REQUEST['mm'];
			echo $usermm."/";
		}

$userdd= "";
	
		if($_REQUEST['dd'] == null){
			$uddError = "day is empty....";
		}else{
			$userdd = $_REQUEST['dd'];
			echo $userdd."/";
		}
$useryyyy= "";
	
		if($_REQUEST['yyyy'] == null){
			$uyyyyError = "day is empty....";
		}else{
			$useryyyy = $_REQUEST['yyyy'];
			echo $useryyyy;
		}

	
?>


