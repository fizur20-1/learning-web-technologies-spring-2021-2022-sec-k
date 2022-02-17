<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$gender= $_REQUEST['gender'];
		$dob= $_REQUEST['dob'];
		$dob1= $_REQUEST['dob1'];
		$dob2= $_REQUEST['dob2'];

		if($username != null)  
		{
			$user=  ['name'=>$username];
		}
		else if($email != null )
		{
			$user=['email'=>$email];
		}
		else if($gender != null )
		{
			$user=['gender'=>$gender];
		}
		else if($dob != null )
		{
			$user=['dob'=>$dob];
		}
		else if($dob1 != null )
		{
			$user=['dob1'=>$dob1];
		}
		else if($dob2 != null )
		{
			$user=['dob2'=>$dob2];
		}
$_SESSION['user'] = $user;
			header('location: vprofile.php');
		}
		

		else
			header('location: editprofilechck.php');