<?php
require 'configure.php';
error_reporting(E_ALL ^ E_NOTICE);


  $name=mysqli_escape_string($conn,$_POST['name']);

  $details=mysqli_real_escape_string($conn,$_POST['details']);

  $discount=mysqli_real_escape_string($conn,$_POST['discount']);

  $sold=mysqli_real_escape_string($conn,$_POST['sold']);
  
  $featured=mysqli_real_escape_string($conn,$_POST['featured']);

  $price=mysqli_real_escape_string($conn,$_POST['price']);
  
$serviceType=mysqli_real_escape_string($conn,$_POST['serviceType']);  

  $sid=mysqli_real_escape_string($conn,$_POST['sid']);
  
  $siname=mysqli_real_escape_string($conn,$_POST['siname']);

  
  $con=mysqli_real_escape_string($conn,$_POST['condition']);

  
  $cell=mysqli_real_escape_string($conn,$_POST['cell']);
  
  if($cell>0){$cell=(int)$_POST['cell'];}

  $hidemynumber = (isset($_POST['hidemynumber']));

  $loc=mysqli_real_escape_string($conn,$_POST['loc']);

  
  $cat=mysqli_real_escape_string($conn,$_POST['category']);


   $views=mysqli_real_escape_string($conn,$_POST['views']);
  
 $carDetails=mysqli_real_escape_string($conn,$_POST['carDetails']);


$vehicleType=mysqli_real_escape_string($conn,$_POST['vehicleType']);

$fashionSex=mysqli_real_escape_string($conn,$_POST['fashionSex']);

$fashionSize=mysqli_real_escape_string($conn,$_POST['fashionSize']);  

$housingType=mysqli_real_escape_string($conn,$_POST['housingType']);

$farmingType=mysqli_real_escape_string($conn,$_POST['farmingType']);

$foodType=mysqli_real_escape_string($conn,$_POST['foodType']);

$Numberrooms=mysqli_real_escape_string($conn,$_POST['Numberrooms']);

$Numbertoilets=mysqli_real_escape_string($conn,$_POST['Numbertoilets']);

$employmentType=mysqli_real_escape_string($conn,$_POST['employmentType']);

$entertainmentType=mysqli_real_escape_string($conn,$_POST['entertainmentType']);

   $carMileage=mysqli_real_escape_string($conn,$_POST['carMileage']);
   
   if($carMileage>0){$carMileage=(int)$_POST['carMileage'];}
   
   $petsAge=mysqli_real_escape_string($conn,$_POST['petsAge']);
   
   if($petsAge>0){$petsAge=(int)$_POST['petsAge'];}
   
   $babyproductType = mysqli_real_escape_string($conn,$_POST['babyproductType']); 
  
  $date=date("D, F d, Y g:iA");

if ($name.$details.$price.$loc.$cell.$loc=='') { echo"All fields are required";

}

elseif(strlen($name)>22){echo "item name limit exceeded, must be at most 23 letters!!!";}

elseif ($cat=='') {echo"Category field is required!!!";
  # code...
}
elseif ($loc=='') {echo"Location field is required!!!";
  # code...
}
elseif ($price=='') {echo"Price field is required!!!";
  # code...
}

elseif ($details=='') {echo"Details field is required!!!";
  # code...
}

elseif ($cell=='') {echo"Phone number is required!!!";
  # code...
}


else{

$imageFolder="uploads/";

$watermarkImagePath='mymai.PNG';

$basename=basename($_FILES["imager"]["name"]);

$allowed_extensions = array("jpg",
    "jpeg",
    "png",
      "JPG",
    "JPEG",
    "PNG");


$maxsize=5242880;//5mb

$imagePath=$imageFolder.$basename;

$file_extension=pathinfo($_FILES["imager"]["name"],PATHINFO_EXTENSION);

$imageExtension=pathinfo($imagePath,PATHINFO_EXTENSION);

$ImageSize=$_FILES['imager']['size'];

$image_temp_name=$_FILES["imager"]["tmp_name"];

$exif = exif_read_data($image_temp_name);

if (!empty($exif['Orientation'])) {
  $imageResource = imagecreatefromjpeg($image_temp_name);
  
  switch ($exif['Orientation']) {
    case 3:
     $image = imagerotate($imageResource, 180, 0);
      break;
    
    case 6:
     $image = imagerotate($imageResource, -90, 0);
      break;

    case 8:
     $image = imagerotate($imageResource, 90, 0);
      break;

     
  }

imagejpeg($image, $_FILES["imager"]["tmp_name"]);
}

 imagedestroy($imageResource);
          imagedestroy($image); 


if (!file_exists($image_temp_name)) {
  
 echo "Choose Image file to upload!!!"; 
}

elseif(!in_array($file_extension,$allowed_extensions)){ echo "Please upload valid Image in png and Jpeg only";
    
}

elseif (($_FILES["profile-pic"]["size"] > 2000000)) {
    
   "Image file size limit is exceeded!!!"; 

}
else {
  
 $upload=move_uploaded_file($image_temp_name,$imagePath); 
 
 $watermarkImg = imagecreatefrompng($watermarkImagePath); 
                switch($imageExtension){ 
                    case 'jpg': 
                        $im = imagecreatefromjpeg($imagePath); 
                        break; 
                    case 'jpeg': 
                        $im = imagecreatefromjpeg($imagePath); 
                        break; 
                    case 'png': 
                        $im = imagecreatefrompng($imagePath); 
                        break; 
                    default: 
                        $im = imagecreatefromjpeg($imagePath); 
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
                imagepng($im, $imagePath); 
                imagedestroy($im); 
            imagedestroy($imageResource);
            imagedestroy($image);


 
}


$check="select *from comment where name='$name' and message='$details'";

$we=mysqli_query($conn,$check);

if ($we->num_rows==1) { echo"You cannot post the same content twice!!!";

}


else {

   $a="insert into comment(sid,siname,name,message,con,photo,price,cell,loc,category,views,discount,sold,featured,hidenum,carDetails,vehicleType,carMileage,fashionSex,fashionSize,petsAge,farmingType,foodType,Numberrooms,Numbertoilets,housingType,employmentType,entertainmentType,babyproductType,serviceType,date)values('$sid','$siname','$name','$details','$con','$imagePath','$price','$cell','$loc','$cat','$views','$discount','$sold','$featured','$hidemynumber','$carDetails','$vehicleType','$carMileage','$fashionSex','$fashionSize','$petsAge','$farmingType','$foodType','$Numberrooms','$Numbertoilets','$housingType','$employmentType','$entertainmentType','$babyproductType','$serviceType','$date')";

   $r=mysqli_query($conn,$a);

if (!$r) {echo"Item was not posted!!!";


}

else{





  echo "1";
}

}







}







 ?>
