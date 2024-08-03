
<?php
$result_pic='';

require 'configure.php';

$pic =mysqli_escape_string($conn,$_POST['pict']) ;

$imagefolder="uploads/";

$watermarkImagePath='mymai.PNG';

$filecount=count($_FILES['fileupload']['name']);

$allowed_extensions = array("jpg","jpeg","png","JPG","JPEG","PNG"); 

$output='';

for ($i=0; $i<$filecount ; $i++) { 
    
  $file_extension=pathinfo($_FILES["fileupload"]["name"][$i],PATHINFO_EXTENSION); 

  $imagepath=$imagefolder.$_FILES['fileupload']['name'][$i];
  
  $image_temp_name=$_FILES["fileupload"]["tmp_name"][$i];
  
  
$exif = exif_read_data($image_temp_name);


if (!empty($exif['Orientation'])) {
  $image = imagecreatefromjpeg($image_temp_name);
  
  switch ($exif['Orientation']) {
    case 3:
     $image = imagerotate($image, 180, 0);
      break;
    
    case 6:
     $image = imagerotate($image, -90, 0);
      break;

    case 8:
     $image = imagerotate($image, 90, 0);
      break;
   
   
   
   imagejpeg($image,$image_temp_name);          
  }





}


if (!file_exists($_FILES['fileupload']['tmp_name'][$i])) {
  
 echo "Choose Image file to upload"; 
}

elseif(!in_array($file_extension,$allowed_extensions)){ echo "Please upload valid Image in Png and Jpeg only";
    
}



  else {  

  $upload=move_uploaded_file($image_temp_name,$imagepath);
  $watermarkImg = imagecreatefrompng($watermarkImagePath); 
                switch($imageExtension){ 
                    case 'jpg': 
                        $im = imagecreatefromjpeg($imagepath); 
                        break; 
                    case 'jpeg': 
                        $im = imagecreatefromjpeg($imagepath); 
                        break; 
                    case 'png': 
                        $im = imagecreatefrompng($imagepath); 
                        break; 
                    default: 
                        $im = imagecreatefromjpeg($imagepath); 
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
                imagepng($im, $imagepath); 
                imagedestroy($im); 
                
                imagedestroy($image);
                imagedestroy($image);


}

 $check="select * from picx where sid='$pic' and pictures='$imagepath'";

 $result_check=mysqli_query($conn,$check);

 $count=$result_check->num_rows;

if ($count>0) {$er="<div align='center' id='result-pic'>You have posted this picture before</div>";
  
}
elseif ($count==0) {
  
 $dbc=mysqli_query($conn,"insert into picx(sid,pictures) values ('$pic','$imagepath')");

  if ($dbc) {
  	echo "1";
  }

     
    

}
}


?>
