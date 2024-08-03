<?php
include_once "configure.php";
error_reporting(E_ALL ^ E_NOTICE);
if(!empty($_POST['column'].$_POST['value'])){
$sql = "update comment set " .mysqli_escape_string($conn, $_POST["column"]) . "='" .mysqli_escape_string($conn, $_POST["value"]) . "' where id=" . mysqli_escape_string($conn,$_POST["id"]);
if (mysqli_query($conn, $sql)){
    echo "true";
}
else{
    echo "false";}
}
?>