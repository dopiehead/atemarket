<?php 

session_start();

$sid = $_SESSION['id'];

require 'configure.php';    

if (isset($_POST['id'])) {
  
  $id= $_POST['id'];


  
$sql = "UPDATE comment SET sold = 1 where id ='$id'";

$query=mysqli_query($conn,$sql);

if ($query) {
    
 mysqli_query($conn,"update profile set sold = +1 where id='$sid'");   
    

echo "1";
	
}
else{

	echo mysqli_error($query);
}

  
} ?>