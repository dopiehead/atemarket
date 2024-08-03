<?php 
require 'connection.php';


	$sender_email=mysqli_escape_string($con,$_POST['sentby']);

    $name=mysqli_escape_string($con,$_POST['name']);

	$subject=mysqli_escape_string($con,$_POST['subject']);
	
	$itemid=mysqli_escape_string($con,$_POST['itemid']);

	$is_sender_deleted=mysqli_escape_string($con,$_POST['is_sender_deleted']);

	$is_receiver_deleted=mysqli_escape_string($con,$_POST['is_receiver_deleted']);

	$compose=mysqli_escape_string($con,$_POST['message']);
         
         $compose = trim($_POST['message']);
         
    $has=mysqli_escape_string($con,$_POST['has']);

	$receiver_email=mysqli_escape_string($con,$_POST['sentto']);

    $date=date("D, F d, Y g:iA");

if ($compose =='') { echo "Message field is required";

}

elseif(!filter_var($sender_email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}

elseif(!filter_var($receiver_email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}

elseif ($subject =='') { echo "Subject field is required";


}

else{


$serc="insert into messages values('','".$sender_email."','".$name.",'".$subject."','".$itemid."','".$compose."','".$receiver_email,"','".$has."','".$is_sender_deleted."','".$is_receiver_deleted."','".$date."')";

$query=mysqli_query($con,$serc);

if ($query) { 


require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$mail= new PHPMailer;


$mail->SMTPDebug = 0;
                      // Enable verbose debug output
    $mail->isSMTP(); 
                                               // Send using SMTP
    $mail->Host='server191.web-hosting.com';

    $mail->Host='server191.web-hosting.com';

    $servername="localhost";

$mail->Port=465;

$mail->SMTPAuth=true;

$mail->SMTPSecure='ssl';

$mail->Username='atemtmmu';

$mail->Password='A1vGYT1CXbrx';

$mail->setFrom('contact@atemarket.com','atemarket');

$mail->addAddress($receiver_email);

$mail->AddEmbeddedImage('myads.PNG','pic');

$mail->addReplyTo('contact@atemarket.com');

$mail->isHTML(true);

$mail->Subject=$subject;

$mail->MsgHTML("



<meta name='color-scheme' content='light only'>

<meta name='supported-color-schemes' content='light only'>

<meta name='color-scheme' content='light only'>

<meta name='supported-color-schemes' content='light only'>

<link rel='stylesheet' type='text/css' href='bootstrap.min.css'>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat|Poppins'>

<body style='height:;font-family:;font-size:px;'>

<img style='width:100%;opacity:1;margin-top:-5px;' src='cid:pic' height='70' width=''>




<div align='' class='container' style='color:black;font-size:14px;font-family:;'>

	
<br>

<b style='font-weight:bold;' style='font-size:19px;color:black;font-family:poppins;'>".$subject."</b><br><br>


<span style='color:rgba(0,0,0,0.6);'>You have a message from <b>".$name."</b></span><br><br>



</div>



<div align='' style='font-size:14px;font-family:poppins;' class='container'><q>

".$compose." </q><br><br>

<a class='btn btn-primary form-control' style='color:white;font-size:14px;border-radius:12px;background-color:rgba(255,165,40,1);font-family:sans-serif;padding:8px;width:100%;text-decoration:none;box-shadow:0px 3px 15px rgba(0,0,0,0.3);' href='http://atemarket.com/chat.php?user_name=$receiver_email' class='form-control'>Login to view message</a>

</div>




<br>



</div></div>

</div>


</body>



















	");


if (!$mail->send()) {echo "message not sent".$mail->ErrorInfo;
	
}

else{

	echo"1";
}






























	
}
else{echo mysqli_error($query);

}

}




 ?>