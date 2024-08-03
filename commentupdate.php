
<?php 
require 'configure.php';

    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    
    $firstname=nl2br($_POST['firstname']);
    
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
    
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    
      $email=mysqli_real_escape_string($conn,$_POST['email']);
   

   if ($firstname.$lastname.$email.$subject=='') { echo"All fields are required";
   }

   elseif ($firstname=='') {

   	echo "Message field is required";
   }

    elseif ($lastname=='') {

   echo "Name field is required!!!";	
   }

 elseif ($email=='') {
   echo "Email field is required!!!";
   }
   
   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported!!!";}

    elseif ($subject=='') {
   echo "Subject field is required!!!";
   }      


else{
 



$get_com="select * from newsfeed where compose='$lastname' and email='$email' and name='$firstname' and subject='$subject' ";


$combine=mysqli_query($conn,$get_com);



$res=$combine->num_rows;


if ($res==1) {echo"You cannot post the same message twice!!!.";


}
elseif($res==0){   
    
 


 
$dbc=mysqli_query($conn,"insert into newsfeed(name,subject,compose,email) values('$firstname','$subject','$lastname','$email')");



if ($dbc) 

  
   { 
echo"1";

     }
else{

  echo"Message was not sent!!!";
  
  

  echo mysqli_error($dbc);
}


} 

}


 ?>



