<?php
session_start();
header("Location: login.php");
$con = mysqli_connect('localhost','root','1234567');

mysqli_select_db($con, 'misk');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$s= "select * from users where email='$email'";
$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

If($num == 1){
	echo "This Email Address Already Taken!";
}else{
   $reg ="insert into users(email , password ,name) values('$email','$password','$name')";
   mysqli_query($con , $reg);
   echo "Registration Successful !!";
}
?>