<?php 

require 'configure.php';
   session_start();


	$merchant=mysqli_real_escape_string($conn,$_POST['merchant']) ;
       
	

    $myid=$_POST['id'];


  

    




	
    

	$sql="update profile set merchant='$merchant' where id='$myid'";


	$bgt=mysqli_query($conn,$sql);

	

	if ($bgt) { 

$_SESSION['merchant'] = $merchant;

		echo "1";



	}


else{ echo "error in saving record";


}



?>
