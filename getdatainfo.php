<?php 

session_start();

$sender= $_SESSION['email'];

$user_name = $_SESSION['username'];

require 'connection.php';  


	$read = mysqli_query($con,"select * from messages where has_read = 0 and sender_email='$user_name'");
	

	
	if($read->num_rows>0){
	    
	    echo"1";
	}

?>
 