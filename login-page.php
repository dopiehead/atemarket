
<?php 
session_start();

require 'configure.php';


$email=mysqli_escape_string($conn,$_POST['email']);

$password=mysqli_escape_string($conn,$_POST['password']);

$merchant=mysqli_escape_string($conn,$_POST['merchant']);

$secret_password= sha1($password);

if (empty($email.$password)) {

	echo "All fields are required!!!";
}

elseif ($email=='') {echo "Email field is required!!!";
	
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}

elseif ($password=='') {echo "Password field is required!!!";
	
}


else{

$checkuser= mysqli_query($conn,"select * from profile where email ='$email'");

if($checkuser->num_rows==0)
{
echo "This account does not exist!!!";}

else{

if ($merchant=='Buyer') {



$condition="select * from profile where email = '$email' and password = '$secret_password' and verified = 1 and 

merchant = 'Buyer'";

}


if ($merchant=='Seller') {


$condition="select * from profile where email = '$email' and password = '$secret_password' and verified = 1 and 


merchant = 'Seller'";

}


$dbc=mysqli_query($conn,$condition);

	
$result=$dbc->num_rows;

if ($result>0) { 
		
mysqli_query($conn, "delete from forgetp where email ='$email'");
	
while ($row=mysqli_fetch_array($dbc))  {
	



	    $_SESSION["id"] = $row['id'];


        $_SESSION["email"]=$row['email'];
		
       
        $_SESSION["name"]=$row['name'];

        
        $_SESSION["merchant"]=$row['merchant'];
      
      
      $_SESSION["image"]=$row['profile_pic'];
      
      
      $_SESSION["date"]=$row['date'];
      
        $_SESSION["followers"]=$row['followers'];
      

     
     
   echo "1";


	




  
	}
	
}




else{


     $query=mysqli_query($conn,"insert into forgetp values ('','$email')");

     if ($query) {
    
     $countQuery=mysqli_query($conn,"select * from forgetp where email ='$email'");

     if ($countQuery->num_rows==1) {

    echo"Incorrect password. You have 3 more attempts!!!";
}

elseif ($countQuery->num_rows==2) {

   echo"Incorrect password. You have 2 more attempts!!!";	
}
    
elseif ($countQuery->num_rows==3) {

   echo"Incorrect password. You have 1 more attempt!!!";	
}

else{
     $querychange=mysqli_query($conn,"update profile SET verified = 0 where email ='$email'");

     if ($querychange) {

     	echo "Your account has been temporarily suspended. Please refer to customer care service!!!";	
     
     }

    
     }
     	
     
}

}

}


}




 ?>

