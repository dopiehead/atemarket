<?php

session_start();

$follower=$_SESSION['id'];

require 'configure.php';



$user = mysqli_real_escape_string($conn,$_POST['user_name']);


$checklist = mysqli_query($conn, "select * from followers where user_id = '$user' and follower_id ='$follower'");

if ($checklist->num_rows>0) {
	



$query =  mysqli_query($conn, "delete from followers where (user_id = '$user' and follower_id ='$follower')");

if($query){



$decreFollowers = mysqli_query($conn,"UPDATE profile SET followers = followers -1 where id ='$user'");

if ($decreFollowers) {
	
	echo"1";
	
	}

}

}

?>