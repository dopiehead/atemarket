
<?php 

session_start();


require 'configure.php';



$myid=mysqli_real_escape_string($conn,$_POST['id']);

$imageFolder="profile/";


$basename=basename($_FILES["profile_pic"]["name"]);


$allowed_extensions = array(
    "jpg",
    "jpeg",
    "png",
      "JPG",
    "JPEG",
    "PNG"
    
    );


$maxsize=5242880;//5mb



$mypic=$imageFolder.$basename;



//getting image extension

$file_extension=pathinfo($mypic,PATHINFO_EXTENSION);





//getting image size

$ImageSize=$_FILES['profile_pic']['size'];



//getting temp name

$image_temp_name=$_FILES["profile_pic"]["tmp_name"];




if (!file_exists($image_temp_name)) {
  
 echo "Choose Image file to upload"; 
}

else if(!in_array($file_extension,$allowed_extensions)) {

echo "Please upload files in jpeg and png format only";
}

else{

$upload=move_uploaded_file($image_temp_name,$mypic);

$sql="update profile set profile_pic='$mypic' where id='$myid'";


	$changepic=mysqli_query($conn,$sql);

    $_SESSION['image'] = $mypic;




	if ($changepic) { echo "1";

	}


else{ echo "error in saving record";


}
}

?>



   