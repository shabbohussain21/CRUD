<?php
session_start();

$con = mysqli_connect('localhost','root','1234567');

mysqli_select_db($con, 'misk');

$email = $_POST['email'];
$password =$_POST['password'];

$s = "select * from users where email = '$email' && password = '$password'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

If($num == 1){
	header("Location:userprofile.php");
}else{
  header("Location:login.php");
}
?>