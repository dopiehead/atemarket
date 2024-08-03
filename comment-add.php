

<?php
require_once ("db.php");
$commentId =trim($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = trim($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName =trim($_POST['name']) ? $_POST['name'] : "";
$date = date("D, F d, Y g:iA", strtotime('+1 hours'));
if ($commentSenderName=='') { echo"Name field required";
	
}

elseif ($comment=='') {

	echo"Comment field is required";
}


else{
$commentId = mysqli_real_escape_string($comm,$_POST['comment_id']); 
$comment = mysqli_real_escape_string($comm,$_POST['comment']);
$commentSenderName = mysqli_real_escape_string($comm,$_POST['name']);
$comment = nl2br($_POST['comment']);




$sql = "INSERT INTO tbl_comment(parent_comment_id,comment,comment_sender_name,date) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $date . "')";

$result = mysqli_query($comm, $sql);

if (! $result) {
    $result = mysqli_error($comm);
}

}
echo $result;
?>
