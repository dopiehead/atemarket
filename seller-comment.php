<?php

	require 'configure.php';

$product_ID = mysqli_real_escape_string($conn,$_POST['product_ID']);

$product_name =  mysqli_real_escape_string($conn, $_POST['product_name']);

$sender_email = mysqli_real_escape_string($conn, $_POST['sender_email']);

$sender_name = mysqli_real_escape_string($conn, $_POST['sender_name']);

$comment = mysqli_real_escape_string($conn, $_POST['comment']);

  $date=date("D, F d, Y g:iA", strtotime('+1 hours'));
  

if (empty($comment.$sender_name.$sender_email)) {

	echo "All fields are required!!!";
}




elseif (empty($comment)) {
	
	echo "Comment field is required!!!";
}

elseif (empty($sender_name)) {
	
	echo "Name field is required!!!";
}


elseif (empty($sender_email)) {
	
	echo "Email field is required!!!";
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported!!!";}


else{

$check = mysqli_query($conn,"select * from seller_comment where sender_email='$sender_email' AND sender_name='$sender_name' AND product_name='$product_ID' AND comment='$comment'");
   
if($check->num_rows>=1){

echo 'SPAM';

}

else{


	$query= mysqli_query($conn,"insert into seller_comment value('','$sender_email','$sender_name','$comment','$product_ID','$product_name','$date')");

	if ($query) {
		
		echo "1";
	}
	else{

		echo "Error in adding comment";
	} }
}

?>