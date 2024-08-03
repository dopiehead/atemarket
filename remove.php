<?php 
session_start();
    

if (isset($_POST['id'])) {

  $id= $_POST['id']; 
  	
require 'connection.php';
  
$sql="UPDATE messages SET is_receiver_deleted = 1 where sender_email ='$id'";

$query=mysqli_query($con,$sql);
if ($query) {

	echo"1";
}
else{

	echo "Error in deleting message";
}

  
} ?>
