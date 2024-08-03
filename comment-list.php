<?php
require_once ("db.php");

$sql = "SELECT * FROM tbl_comment ORDER BY comment_id asc";

$result = mysqli_query($comm, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($comm);
echo json_encode($record_set);
?>