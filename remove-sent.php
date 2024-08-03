<?php 

  
  $id= $_POST['id'];

require 'connection.php';
  
$sql="UPDATE messages SET is_sender_deleted = 1 where receiver_email ='$id'";

$query=mysqli_query($con,$sql);

if ($query) {

	echo "1";
	exit();
}
else{

	
}

  ?>