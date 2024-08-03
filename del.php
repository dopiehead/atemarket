<?php
session_start();

require 'configure.php';

if (isset($_GET['id'])) {

	$id=$_GET['id'];

$wed="delete from comment where (id='$id')";

$src=mysqli_query($conn,$wed);

}
  ?>
  
  
  

<?php


if (isset($_GET['id'])) {

	$id=$_GET['id'];

$thu="delete from picx where (sid='$id')";

$src=mysqli_query($conn,$thu);



}
  ?>
  
  
  
<?php


if (isset($_GET['id'])) {

	$id=$_GET['id'];

$fri="delete from seller_comment where (product_id='$id')";

$src=mysqli_query($conn,$fri);

}
  ?>

  

<?php


if ($src) {
  echo"<h4 style='background-color:green;padding:8px;'>Item has been deleted successfully</h4>";
  
    header("refresh:5,edituser.php?#myitems");
	
}   
else{echo mysqli_error($src);
}



?>











