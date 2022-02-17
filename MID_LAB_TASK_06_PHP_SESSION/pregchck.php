<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$user_name= $_REQUEST['User_name'];
		$c_pass= $_REQUEST['Cpassword'];
		$gender= $_REQUEST['gender'];
		$dob= $_REQUEST['dob'];
		$dob1= $_REQUEST['dob1'];
		$dob2= $_REQUEST['dob2'];


		if($username != null && $password != null && $email != null && $user_name!=null && $c_pass!=null && $c_pass==$password ){
			$user = ['name'=> $username, 'password'=> $password, 'email'=>$email, 'User_name'=>$user_name, 'Cpassword'=>$c_pass,
			 'gender'=>$gender,'dob'=>$dob, 'dob1'=>$dob1, 'dob2'=>$dob2  ];
			$_SESSION['user'] = $user;
			header('location: plogin.php');
		}
		else{
			echo "null submission";
		}
	}
?>