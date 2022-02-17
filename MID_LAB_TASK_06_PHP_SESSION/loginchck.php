<?php 
	session_start();

	if(isset($_REQUEST['submit'] )){
		
		$username = $_REQUEST['User_name'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			$user = $_SESSION['user'];
			if($user['User_name'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				header('location: dashboard.php');
			}else{
				echo "invalid user..";
			}

		}else{
			echo "null submission";
		}
	}
	if(isset($_REQUEST['fpass']))
	{
		header('location: fpass.php');
	}
?>