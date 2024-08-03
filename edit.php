

<?php session_start();

if($_SESSION['email']!='ngnimitech@gmail.com'){
    
    echo ("<script>location.href='index.php'</script>"); 
}





?>












<?php 
require 'configure.php';


if (isset($_GET['id'])) {
	$myid=$_GET['id'];

	$sql="select* from comment where id='$myid'";
	$dbc=mysqli_query($conn,$sql);
	
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




 



	<title>&agrave;t&#233; -The online marketing website</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	
	
	
	
	
	
<style type="text/css">
	
	body{

}

h1 img{
float:left; 
height:60px;
width: 150px;
margin-left: -10px;
margin-top:px;
}


h1{
height:80px;
background-color:rgba(0,0,20,0.6);
padding: 3px;

}	
a:hover{
opacity: 0.8;

}




</style>
<body>

<h1>

<a href="index.php" style="text-decoration: none;"><img style="" align="" src="kwasaf2.png" height="90" width="180"></a>


</h1>
<br>
<h4 align="center" class="container" style="font-family: century gothic;font-weight: bold; color:darkgreen;" >Welcome Chief</h4>

<br>
	<div class="container">
	<form method="POST" action="" enctype="multipart/form-data" >
		
		<input type="hidden" name="id" value="<?php echo $myid?>">
		
         <i style="color: green; font-style: italic;font-size:14px;">Name<input type="text" name="name" class="form-control"value="<?php echo $myname ?>">
		Details:<input type="text" name="message" class="form-control" value="<?php echo$mydetails?>">
		
		
		price<input type="text" name="price" class="form-control"value="<?php echo $myprice; ?>">


		Image<input type="file" name="fileupload"style="color: white;padding:3px;" multiple="" class="form-control"value="<?php echo $myimage; ?>">


		Location<input type="text" name="loc" class="form-control"value="<?php echo $myloc; ?>">


		Condition<input type="text" name="con" class="form-control"value="<?php echo $mycon; ?>">


		Phone no<input type="text" name="cell" class="form-control"value="<?php echo $mycell; ?>">


		Category<input type="text" name="category" class="form-control"value="<?php echo $mycat; ?>">

	</i>
		<br><input type="submit" name="submit" value="Update" class="btn btn-success form-control" style="color: white;"><br><br>

		
		<a href="admin.php" value="Cancel" class="btn btn-primary form-control" style="color: white;font-style:initial; ">Cancel</a>






	</i>
		
	</form>
	
</div>
</body>


<?php 


require 'configure.php';


if (isset($_POST['submit'])) {
	$myname=$_POST['name'];
       
	$myprice=$_POST['price'];

	$imageFolder="uploads/";

    $basename=basename($_FILES["fileupload"]["name"]);

    $myimage=$imageFolder.$basename;

    $imageExtension=pathinfo($myimage,PATHINFO_EXTENSION);

    $ImageSize=$_FILES['fileupload']['size'];

    $image_temp_name=$_FILES["fileupload"]["tmp_name"];

    $upload=move_uploaded_file($image_temp_name,$myimage);

    $myid=$_POST['id'];

	$mydetails=$_POST['message'];

	$myloc=$_POST['loc'];

	$mycell=$_POST['cell'];

	$mycon=$_POST['con'];

    $mycat=$_POST['category'];

   

	$sql="update comment set name='$myname',message='$mydetails',photo='$myimage',loc='$myloc',con='$mycon',price='
	$myprice',cell='$mycell', category='$mycat' where id='$myid'";

	$bgt=mysqli_query($conn,$sql);

	if ($bgt) { header("location:admin.php");
	}


else{ echo mysqli_error($bgt);}


}
?>




 
