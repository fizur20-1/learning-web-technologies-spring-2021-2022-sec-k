<?php 
	session_start();
	
	if(isset($_REQUEST['submit'])){
		$id = rand();
		$bookname = $_REQUEST['username'];
		$writer = $_REQUEST['writer'];
		


		

		if($bookname!= null && $writer!= null ){
		

			$user = $id."|".$bookname."|".$writer."\r\n";
			$file = fopen('../../models/managertxt/booklist.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../../views/manager/book_list.php');
			
		}else{
			echo "null submission";
		}
	}
?>