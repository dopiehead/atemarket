<?php 

error_reporting(E_ALL ^ E_NOTICE);


require 'configure.php';

   session_start();


	$mypassword = mysqli_escape_string($conn,$_POST['password']);

	$opassword =  mysqli_escape_string($conn,$_POST['opassword']);

	$cpassword =  mysqli_escape_string($conn,$_POST['cpassword']);
       
	$secret_password = sha1($mypassword);

    $myid= mysqli_escape_string($conn,$_POST['id']);

    $opassword=$_SESSION['password'];


   

if ($mypassword=='') {
	
	echo "Password field is required";
}

elseif ($cpassword=='') {
	
	echo "Confirm new password";
}
   
elseif ($mypassword!=$cpassword) {

	echo "Password mismatch";
}

else{

	
    if(!empty($mypassword)){

	$sql="update profile set password='$secret_password' where id='$myid'";

	$bgt=mysqli_query($conn,$sql);

	if ($bgt) { 
	    
	    $_SESSION['password'] = $mypassword;   
	    
	    echo "1";

	}


else{ echo "Error in saving record";


}

}
else{
    
  echo"Password field is required"; 
    
}


}
?>

