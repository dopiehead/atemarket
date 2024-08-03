

<?php 

require 'configure.php';

if (isset($_GET['vkey'])) {

	$vkey=$_GET['vkey'];




  
$sql = "UPDATE profile SET verified = 1 where vkey ='$vkey' ";


$query = mysqli_query($conn,$sql);

if ($query) {
	
	echo "Registration was successful, Please <a href='https://atemarket.com/newsignup.php?mypage=login'>log in</a> to continue";
}

elseif ($query->num_rows>1) {
	
	echo "You have already been verified, <a href='newsignup.php?mypage=login>Please log in</a> to coninue";
}


else{

	mysqli_error($query);
}



}



 ?>








<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	    
	    a{
	        
	        color:red;
	    }
	    
	</style>
</head>
<body>
    
</body>
</html>