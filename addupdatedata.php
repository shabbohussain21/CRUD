<?php
session_start();

$con = mysqli_connect('localhost','root','1234567');

// header("Location:display.php");

mysqli_select_db($con, 'misk');

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$headline = $_GET['headline'];
$summary = $_GET['summary'];


// echo $id, $fname, $lname,$email, $headline, $summary;

$s= "update profile set first_name='$fname', last_name='$lname', email='$email', headline='$headline',summary='$summary' where email='$email'";
$result = mysqli_query($con, $s);

if($result){
    header("Location: display.php");
}else{
  echo " record not updated";
}
?>