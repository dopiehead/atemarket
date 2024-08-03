<?php 

  require 'configure.php';


  $name=trim($_POST['name']);


  $comment=mysqli_real_escape_string($f,$_POST['comment']);


  $name=mysqli_real_escape_string($f,$_POST['name']);


  $comment=trim($f,$_POST['comment']);



  $date=date("D, M n, Y g:iA ");




if ($name=='') {$comment_fail="Please write a name!!!";
  
}
elseif ($comment=='') {echo"Please write a message!!!";
	# code...
}
else{




 

$get_com="select * from comments where name='$name' and comment='$comment'";





$combine=mysqli_query($conn,$get_com);




$res=$combine->num_rows;




if ($res==1) {$comment_fail="You cannot post the same comment twice!!!";
  
}



else{







$a="insert into comments(name,comment,date) values('$name','$comment','$date')";




$r=mysqli_query($conn,$a);





if (!$r) {$comment_fail="Message was not sent";




}
else{ $comment_success="Your comment was posted succesfully";


}


}

}






 ?>
 

<div class="comment_result">
<?php

if (isset($comment_success)) {
  echo " ".$comment_success;
}


if (isset($comment_fail)) {
  echo " ".$comment_fail."";
}


if (isset($comment_fail1)) {
  echo " ".$comment_fail1."";
}

?>

</div>


