<?php



require 'configure.php';



$email=mysqli_escape_string($conn,$_POST['email']);

$sender_email=mysqli_escape_string($conn,$_POST['sender_email']);

$pname=mysqli_escape_string($conn,$_POST['pname']);
  
$product=mysqli_escape_string($conn,$_POST['product']);



$issue=mysqli_escape_string($conn,$_POST['issue']);



  $date=date("D, M n, Y g:iA ");

if (empty($email.$issue.$product)) {

	echo "All fields are required!!!";
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}

elseif ($email=='') {echo"Email field is required!!!";
  
}

elseif ($issue=='') {echo"issue field is required!!!";
	# code...
}
elseif ($product=='') {echo"Product details is required!!!";
	# code...
}
else{



$a="insert into product_issue(pname,email,product,sender_email,issue,date) values('$pname','$email','$product','$sender_email','$issue','$date')";




$r=mysqli_query($conn,$a);





if (!$r) {echo"Message was not sent!!!";




}
else{ echo"1";


}




}






 ?>
 



