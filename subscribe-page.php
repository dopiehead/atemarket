<?php 
require 'configure.php';

 $email = mysqli_real_escape_string($conn,$_POST['subscribe']);
   
 if ($email=='') {

 	
   echo "Email field is required!!!";
   }

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported!!!";}

else{
    

$get_com="select * from subscribers where subscriber_name='$email'";


$combine=mysqli_query($conn,$get_com);



$res=$combine->num_rows;


if ($res==1) {echo"This email has already been used!!!.";


}
elseif($res==0){   
    
 


 
$dbc=mysqli_query($conn,"insert into subscribers(subscriber_name) values('$email')");



if ($dbc) 

  
   { 
echo"1";

     }
else{

  echo"Subscription was not successful!!!";
  
  

  echo mysqli_error($dbc);
}


} 

}


 ?>

