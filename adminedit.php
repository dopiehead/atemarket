<?php 



if (isset($_GET['id'])) {

	$myid=$_GET['id'];

	$con=mysqli_connect('localhost','root','','farmer');

	$sql="select* from comment where id='$myid'";
	
	$dbc=mysqli_query($con,$sql);
	
	while ($row=mysqli_fetch_array($dbc)) {
		$myname=$row['name'];

	    $myprice=$row['price'];

		$myimage=$row['photo'];

		$myid=$row['id'];

		$mydetails=$row['message'];

		$myloc=$row['loc'];

		$mycell=$row['cell'];

		$mycon=$row['con'];

		$mycat=$row['category'];


	}
	
}
 ?>




 <?php
$con=mysqli_connect('localhost','root','','farmer');

if (isset($_POST['submit'])) {
	$myname=mysqli_real_escape_string($_POST['name']);
   
	$myprice=mysqli_real_escape_string($con,$_POST['price']);

		$myimage=mysqli_real_escape_string($con,$_POST['photo']);

		$myid=mysqli_real_escape_string($con,$_POST['id']);

		$mydetails=mysqli_real_escape_string($con,$_POST['message']);

		$myloc=mysqli_real_escape_string($con,$_POST['loc']);

		$mycell=mysqli_real_escape_string($con,$_POST['cell']);

		$mycon=mysqli_real_escape_string($con,$_POST['con']);

        $mycat=mysqli_real_escape_string($con,$_POST['category']);

    
	$sql="update comment set name='$myname',message='$mydetails',photo='$myimage',loc='$myloc',con='$mycon',price='
	$myprice',cell='$mycell', category='$mycat' where id='$myid'";
	$bgt=mysqli_query($con,$sql);
	if ($bgt) { header("location:admin.php");
	}
else{ echo mysqli_error($bgt);}
}
?>


<!DOCTYPE html>
<html>

	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	
	body{

}

h1 img{
float:left; 
height:60px;
width: 150px;
margin-left: -40px;
margin-top: -3px;
}


h1{
height:80px;
background-color:rgba(255,165,50,1);
padding: 3px;

}	
a:hover{
opacity: 0.8;

}




</style>
<body>

<h1>

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="kwasaf.png" height="90" width="180"></a>


</h1>
<br>
<h4 align="center" class="container" style="font-family: century gothic;font-weight: bold; color:darkgreen;" >Welcome Chief</h4>

<br>
	<div class="container">
	<form method="POST" action="" >
		
		<input type="hidden" name="id" value="<?php echo $myid?>">
         <i style="color: green; font-style: italic;font-size:14px;">Name<input type="text" name="name" class="form-control"value="<?php echo $myname ?>">
		Details:<input type="text" name="message" class="form-control" value="<?php echo$mydetails?>">
		
		
		price<input type="text" name="price" class="form-control"value="<?php echo $myprice; ?>">
		Image<input type="text" name="photo" class="form-control"value="<?php echo $myimage; ?>">
		Location<input type="text" name="loc" class="form-control"value="<?php echo $myloc; ?>">
		Condition<input type="text" name="con" class="form-control"value="<?php echo $mycon; ?>">
		Phone no<input type="text" name="cell" class="form-control"value="<?php echo $mycell; ?>">
		Category<input type="text" name="category" class="form-control"value="<?php echo $mycat; ?>">
		<br><input type="submit" name="submit" value="Update" class="btn btn-primary form-control" style="color: white;"></i>
		
	</form>
	
</div>
</body>
</html>



 
