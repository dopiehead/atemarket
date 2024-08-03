
<?php session_start();

$sid = $_SESSION['id'];



?>

<!DOCTYPE html>
<html>
<title>&agrave;t&#233; -The online marketing website</title> 

<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="font.goggleapis.com">
<link rel="stylesheet" href="flickity.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">

<script src="sweetalert.min.js"></script> 



  <script src="jquery-1.11.3.min.js"></script>
<script src="flickity.pkgd.min.js"></script>

<style type="text/css">


p{

	color: rgba(0,0,0,0.6);
	font-size: 13px;
}


.col-md-6{
     padding: 10px;
	border-bottom: 1px dotted rgba(0,0,0,0.8);
}


h4{


  font-weight: bold;
}

body{


  font-family: poppins;
}

h5{

  animation-name: fade;

  animation-duration: 8s;

  font-weight: bold;

  text-align: center;

  padding: 5px;
  

  opacity: 0;

}

@keyframes fade{


0%{
 
 opacity: 1


}


100%{

  opacity: 0;
}


}


</style>

</head>

<body>


<div class="container">	

<br>

<a class="container" onclick="javascript:history.go(-1)"><i class="fa fa-arrow-left"></i></a>

<br>

<form method="post" action="" enctype="multipart/form-data">

<div class="row jumbotron">
	
<div class="col-md-6">

<h4>Upload passport / Selfie</h4>	

<p>Please upload a passport size photograph or a selfie to continue. This to reduce spamming and phising. All sellers are required to  upload a valid ID card and a selfie or passport size photograph.</p>


<input type="hidden" name="sid" value="<?php echo$_SESSION['id']?>">

<input type="hidden" name="verified" value="0">
	
<input  type="file" name="img" accept="image/*" capture='camera'>


<br>

<br>
</div>


<div class="col-md-6">
	
<h4>Upload Valid ID</h4>
<p>Please upload any valid ID card. Verification process takes about 6-24 hrs for new sellers account to be active, please bear with us.</p>

<input type="file" name="valid_id">
<br>
<br>	
</div>

</div>

<br>

<button name="submit" class="btn btn-success form-control">Submit</button>

</form>
</body>

</html>


<?php

 require 'configure.php';

if (isset($_POST['submit'])) {

	$sid = mysqli_escape_string($conn,$_POST['sid']);
    
    $verified =  mysqli_escape_string($conn,$_POST['verified']);

    $date=date("D, F d, Y g:iA", strtotime('+1 hours'));

$maxsize=5242880;    

$imageFolder="seller-verification/";

$basename= mysqli_escape_string($conn,basename($_FILES["img"]["name"]));

$basenamex=mysqli_escape_string($conn,basename($_FILES["valid_id"]["name"]));

$imagePath=$imageFolder.$basename;

$imagePathx=$imageFolder.$basenamex;

$allowed_extensions = array("jpg",
    "jpeg",
    "png",
      "JPG",
    "JPEG",
    "PNG");

$imageExtension=pathinfo($imagePath,PATHINFO_EXTENSION);

$imageExtensionx=pathinfo($imagePathx,PATHINFO_EXTENSION);

$image_temp_name=$_FILES["img"]["tmp_name"];

$image_temp_namex=$_FILES["valid_id"]["tmp_name"];


if (!file_exists($image_temp_name) || !file_exists($image_temp_namex)) {
  
 echo "<br><h5 class='alert-danger'>Choose Image file to upload</h5>"; 
}

elseif(!in_array($imageExtension,$allowed_extensions) && !in_array($imageExtensionx,$allowed_extensions) ){ echo "<br><h5 class='alert-danger'>Please upload valid Image in png and Jpeg only</h5>";
    
}

elseif (($_FILES["img"]["size"] > 2000000)) {
    
   "<br><h5 class='alert-danger'>Image file size limit is exceeded</h5>"; 

}

else{

$upload=move_uploaded_file($image_temp_name,$imagePath); 

$upload=move_uploaded_file($image_temp_namex,$imagePathx); 

    $check_verify =mysqli_query($conn,"select * from verify_seller where sid = '$sid'");

    if ($check_verify->num_rows>0) {
      
echo "<br><h5 class='alert-primary'>Verification is in process.</h5>";

    }

else{

   $a="insert into verify_seller(sid,img,valid_id,verified,date)values('$sid','$imagePath','$imagePathx','$verified','$date')";

 $r=mysqli_query($conn,$a);

 if ($r) {

 	echo "<br><h5 class='alert-success'>Image upload successful. We will revert back shortly.</h5>";
 }

else{

  echo "<br><h5 class='alert-danger'>Image upload not successful.</h5>";
}

}

}

}

?>