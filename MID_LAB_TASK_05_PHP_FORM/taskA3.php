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


