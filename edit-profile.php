

<?php 

require 'configure.php';
   session_start();


	$myname=mysqli_real_escape_string($conn,$_POST['name']);
       
	

    $myid=mysqli_real_escape_string($conn,$_POST['id']);


    $_SESSION['name'] = $myname;

    




	
    

	$sql="update profile set name='$myname' where id='$myid'";

	$bgt=mysqli_query($conn,$sql);

	if ($bgt) { echo "1";

	}


else{ echo "error in saving record";


}



?>

