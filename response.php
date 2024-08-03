<?php

session_start();

$product_id = $_SESSION['product'];

if(isset($_GET['status'])){
    
 $status = $_GET['status'];   
   
  if($status=='successful'){
    
   require 'configure.php';
    
    
    
    $mypay = mysqli_query($conn,"UPDATE comment SET featured = 1 where id ='$product_id'");
    
    if($mypay){
        
        echo"payment was successful";
        
     ?>
     
     <p>Please proceed to <a href="edituser.php">profile page</a> to verify</p> 
     
<?php

    } 
}

else{
    
  echo"Payment was unsuccessful";  
    
    
}


}




?>