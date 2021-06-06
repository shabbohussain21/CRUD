<?php
session_start();

$con = mysqli_connect('localhost','root','1234567');

mysqli_select_db($con, 'misk');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$headline = $_POST['headline'];
$summary = $_POST['summary'];

$s= "select * from profile where email='$email'";
$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

If($num == 1){
	echo "This Email Address Already Taken!";
}else{
  $reg ="insert into profile(`first_name`, `last_name`,`email` ,`headline`,`summary`) values('$fname','$lname','$email','$headline',
  '$summary')";
   mysqli_query($con , $reg);
   header("Location: display.php");
}
?>