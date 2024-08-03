
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">






<?php

require 'configure.php';



if (isset($_GET['id'])) {


	$id=$_GET['id'];


$checkitem = "select *from comment where sid='$id'";


$check = mysqli_query($conn,$checkitem);


$datafound = $check->num_rows;


if ($datafound==0) {


$thu="delete from profile where (id='$id')";


$src=mysqli_query($conn,$thu);


if ($src) {
    
   ?> 
    
    <script>
    
    alert("User account has been deleted successfully");
    
    setTimeout(function(){
        
      window.location.href='signup.php'; 
        
        
    },1000);
    
    
    
    </script>
    
    
  <?php  
	
} 


else{
	echo mysqli_error($conn);
}

		
}



else{

echo "<h3 style='color:red;'>Please remove all items linked to this account</h3>";

}



}
  ?>

