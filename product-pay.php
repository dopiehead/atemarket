<?php 

session_start();

$user_id=$_SESSION['id'];


require 'configure.php';    

if (isset($_POST['id'])) {
  
  $id= mysqli_real_escape_string($conn,$_POST['id']);


  
$sql = "SELECT * FROM comment where id ='$id'";


$query=mysqli_query($conn,$sql);


while ($row = mysqli_fetch_array($query)) {
 
$_SESSION['product'] = $row['id']; 

 $product_id =$_SESSION['product'];

$user_id=$_SESSION['id'];	
	
	echo "1";	


}
}


  
 ?>