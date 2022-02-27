<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];

		//if($username != null && $password != null && $email != null){
			/*$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			$_SESSION['user'] = $user;*/

			
			//$file = fopen('../models/user.txt', 'a');
			//$user = fgets($file);
			//$userArry = explode('|', $user);

           $username = $_SESSION['current_u'][0];
            $password = $_SESSION['current_u'][1];
           $email = $_SESSION['current_u'][2];


			/*$user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
			$_SESSION['user'] = $user;*/

			$user = $username."|".$password."|".$email."\r\n";
			$file = fopen('../models/user.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			
			header('location: ../views/userlist.php');
			
		
		}
		else echo "noupdate";
		
		header('location: ../views/userlist.php');
	
?>