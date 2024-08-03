

<?php

error_reporting(E_ALL ^ E_NOTICE);

require 'configure.php';

$name=mysqli_escape_string($conn,$_POST['name']);

$email=mysqli_escape_string($conn,$_POST['email']);

$followers=mysqli_escape_string($conn,$_POST['followers']);

$merchant=mysqli_escape_string($conn,$_POST['merchant']);

$password=mysqli_escape_string($conn,$_POST['password']);

$cpassword=mysqli_escape_string($conn,$_POST['cpassword']);

$sold=mysqli_escape_string($conn,$_POST['sold']);

$secret_password= sha1($password);

$verified = mysqli_escape_string($conn,$_POST['verified']);

$date=date("D, F d, Y g:iA", strtotime('+1 hours'));

$vkey=md5(time().$email);

if (empty($name.$email.$password.$cpassword)) { echo"All fields are required";
	
}

elseif ($name=='') { echo"Full name field is required";
	
}
elseif ($email=='') {echo"Email field is required";

}


elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){echo"Email format not supported";}





elseif (empty($cpassword)) { echo"confirm password field is required";
	
}

elseif (empty($password)) { echo"Password field is required";
	
}

elseif ($password=!$cpassword) { echo"Password mismatch!!";
	
}


else {

$check="select *from profile where email='$email'";


$we=mysqli_query($conn,$check);


if ($we->num_rows==1) { echo"This account already exist";

  

}

elseif ($we->num_rows==0) {




$imageFolder="profile/";





$basename=basename($_FILES["profile-pic"]["name"]);


$allowed_extensions = array(
    "jpeg",
    "png",
    "jpg",
      "JPG",
    "JPEG",
    "PNG");


$maxsize=5242880;//5mb



$imagePath=$imageFolder.$basename;



//getting image extension

$file_extension=pathinfo($_FILES["profile-pic"]["name"],PATHINFO_EXTENSION);


$imageExtension=pathinfo($imagePath,PATHINFO_EXTENSION);


//getting image size

$ImageSize=$_FILES['profile-pic']['size'];



//getting temp name

$image_temp_name=$_FILES["profile-pic"]["tmp_name"];


$upload=move_uploaded_file($image_temp_name,$imagePath); 

$tyr="INSERT INTO profile(profile_pic,name,email,followers,password,vkey,verified,merchant,sold,date) VALUES ('$imagePath','$name','$email','$followers','$secret_password','$vkey','$verified','$merchant','$sold','$date')";


$cls= mysqli_query($conn,$tyr);

if ($cls) {


require 'PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';


$mail= new PHPMailer;


$mail->SMTPDebug = 0; 
                     // Enable verbose debug output
    $mail->isSMTP(); 
                                               // Send using SMTP
    $mail->Host='server191.web-hosting.com';

    $mail->Host='server191.web-hosting.com';

    $servername="server191";

$mail->Port=465;

$mail->SMTPAuth=true;

$mail->SMTPSecure='ssl';

$mail->Username='atemtmmu';

$mail->Password='A1vGYT1CXbrx';

$mail->setFrom('contact@atemarket.com','atemarket');

$mail->addAddress($email);

$mail->AddEmbeddedImage('myads.PNG','pic');

$mail->addReplyTo('contact@atemarket.com');

$mail->isHTML(true);

$mail->Subject="EMAIL VERIFICATION ";

$mail->MsgHTML("

<head>

<meta name='color-scheme' content='light only'>

<meta name='supported-color-schemes' content='light only'>

<link rel='stylesheet' type='text/css' href='bootstrap.min.css'>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat|Poppins'>

</head>


<body style='font-family:;font-size:px;background-color:; '>



<img style='width:100%;opacity:1;margin-top:-5px;' src='cid:pic' height='70' width=''>



<br>
<div class='container'>
<b style='font-family:poppins;color:black;font-weight:bolder;font-size:18.4px;'>Verify your email</b></div>
<br><br>
<div align='' class='container' style='color:rgba(0,0,0,0.6);font-size:15px;font-family:poppins;'>
	

<span style='opacity:0.6;'>Hi ".$name.", Use the link below to verify your email and start using <b style='color:rgba(0,70,90,0.7);font-size:16px;'>atemarket</b></span>
<br>
<br>
<br>
<a class='btn btn-danger form-control'  style='border-radius:9px;color:white;background-color:rgba(255,165,40,0.9);text-decoration:none;font-size:14px;padding:8px;box-shadow:0px 3px 8px rgba(0,0,0,0.3);' href ='https://atemarket.com/verify.php?vkey=$vkey'>Verify Account</a><br></b>
<br>
</div>





</div></div>


</div>




</body>

	");


if (!$mail->send()) {echo "Registration was not successful".$mail->ErrorInfo;
	
}
else{

	echo "1";
}
	
}

}


}
?>

