


 <?php 

require 'configure.php';

  $id = mysqli_real_escape_string($conn,$_POST['id']);
  
    $imageFolder="uploads/";
    
    $watermarkImagePath='mymai.PNG';

    $allowed_extensions = array("jpg",
    "jpeg",
    "png",
      "JPG",
    "JPEG",
    "PNG");

    $basename=basename($_FILES["fileupload"]["name"]);
    
   $filecount=count($_FILES['fileupload']['name']);

$file_extension=pathinfo($_FILES["fileupload"]["name"],PATHINFO_EXTENSION);



  if ($filecount>1) {
	
	echo "Maximum limit exceeded!!!";
   }

    $myimage=$imageFolder.$basename;

    $imageExtension=pathinfo($myimage,PATHINFO_EXTENSION);

    $ImageSize=$_FILES['fileupload']['size'];

    $image_temp_name=$_FILES["fileupload"]["tmp_name"];
    

if (!file_exists($image_temp_name)) {
  
 echo "Choose Image file to upload!!!"; 
}

elseif(!in_array($file_extension,$allowed_extensions)){ echo "Please upload valid Image in png and Jpeg only!!!";
    
}

else{
 
 $upload=move_uploaded_file($image_temp_name,$myimage);
 $watermarkImg = imagecreatefrompng($watermarkImagePath); 
                switch($imageExtension){ 
                    case 'jpg': 
                        $im = imagecreatefromjpeg($myimage); 
                        break; 
                    case 'jpeg': 
                        $im = imagecreatefromjpeg($myimage); 
                        break; 
                    case 'png': 
                        $im = imagecreatefrompng($myimage); 
                        break; 
                    default: 
                        $im = imagecreatefromjpeg($myimage); 
                } 
                 
                // Set the margins for the watermark 
                $margin_right = 10; 
                $margin_bottom = 10; 
                 
                // Get the height/width of the watermark image 
                $sx = imagesx($watermarkImg); 
                $sy = imagesy($watermarkImg); 
                 
                // Copy the watermark image onto our photo using the margin offsets and  
                // the photo width to calculate the positioning of the watermark. 
                imagecopy($im, $watermarkImg, imagesx($im) - $sx - $margin_right, imagesy($im) - $sy - $margin_bottom, 0, 0, imagesx($watermarkImg), imagesy($watermarkImg)); 
                 
                // Save image and free memory 
                imagepng($im, $myimage); 
                imagedestroy($im); 


 




  $sql="update comment set photo='$myimage' where id='$id'";

  $bgt=mysqli_query($conn,$sql);

  if ($bgt) { echo "1";
  }
else{ echo mysqli_error($bgt);}
}
?>




