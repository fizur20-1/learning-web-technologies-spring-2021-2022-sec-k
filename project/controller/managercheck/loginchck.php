<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
			//$user = $_SESSION['user'];

			$file = fopen('../../models/user.txt', 'r');

			
			while(!feof($file)){

				$user = fgets($file);
				$userArry = explode('|', $user);
				
				
				if(trim($userArry[1]) == $username && trim($userArry[2]) == $password){
					$_SESSION['status'] = true;
					$_SESSION['current_user'] = $userArry;
					setcookie('status', 'true', time()+3600, '/');
					header('location: ../../views/manager/phome.php');
				}
			}

			echo "invalid username/password";

		}else{
			echo "null submission";
		}
	}
?>