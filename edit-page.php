

 <?php 
error_reporting(E_ALL ^ E_NOTICE);

require 'configure.php';



  $myname=mysqli_real_escape_string($conn,$_POST['name']);
  
  $myprice=mysqli_real_escape_string($conn,$_POST['price']);
  
  if($myprice>0){$myprice=(int)$_POST['price'];}
  
  $myloc=mysqli_real_escape_string($conn,$_POST['loc']);
  
  $mycon=mysqli_real_escape_string($conn,$_POST['con']);

    $mycat=mysqli_real_escape_string($conn,$_POST['category']);
    
    $myfarm=mysqli_real_escape_string($conn,$_POST['farmType']); 
    
    $myfood=mysqli_real_escape_string($conn,$_POST['foodType']); 
    
     $mypets=mysqli_real_escape_string($conn,$_POST['petsAge']); 
     
     if($mypets>0){$mypets=(int)$_POST['petsAge'];}
     
     $employmentType=mysqli_real_escape_string($conn,$_POST['employmentType']); 
    
    $myid=mysqli_real_escape_string($conn,$_POST['id']);

   $mydetails=mysqli_real_escape_string($conn,$_POST['message']);

    $mycell=mysqli_real_escape_string($conn,$_POST['cell']); 
    
    if($mycell>0){$mycell=(int)$_POST['cell'];}
    
     $myservice=mysqli_real_escape_string($conn,$_POST['serviceType']); 
  
  if(strlen($myname)>22){echo "Item name limit exceeded";
      
      
      
  }
  
  elseif($myname==''){echo "Item name field cannot be empty";}
  
  elseif($myprice==''){echo "Item price field cannot be empty";}
  
  elseif($myloc==''){echo "Location field cannot be empty";}





else{

  
  $sql="update comment set name='$myname',foodType='$myfood',petsAge='$mypets',employmentType='$employmentType',serviceType='$myservice',farmingType='$myfarm',message='$mydetails',loc='$myloc',con='$mycon',price='$myprice',cell='$mycell', category='$mycat' where id='$myid'";

  $bgt=mysqli_query($conn,$sql);

  if ($bgt) { echo "1";
  }
else{ echo mysqli_error($bgt);}


}
?>




