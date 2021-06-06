<?php
session_start();

$con = mysqli_connect('localhost','root','1234567');

mysqli_select_db($con, 'misk');
$id = $_GET['id'];

echo $id;
$s="delete from profile where profile_id='$id'";

$result = mysqli_query($con, $s);

// $num= mysqli_num_rows($result);

If($result){
	
	header("Location: display.php");
}else{
   
}
?>