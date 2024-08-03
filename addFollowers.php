<?php

require 'configure.php';

$user = mysqli_real_escape_string($conn,$_POST['user']);

$follower = mysqli_real_escape_string($conn,$_POST['follower']); 

if ($user!=$follower) {

$checkfirst =  mysqli_query($conn, "select * from followers where user_id = '$user' and follower_id ='$follower'");

if ($checkfirst->num_rows==0) {

$query = mysqli_query($conn, "insert into followers value('','$user','$follower')");


if($query){


$increFollowers = mysqli_query($conn,"UPDATE profile SET followers = followers +1 where id ='$user'");

if ($increFollowers) {
	
	echo"1";
	
	}

}

}



}









?>