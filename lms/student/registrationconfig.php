<?php
//--all inpur are protected and here check email username similarity and add new user--
include "connection.php";
error_reporting(0);
if(isset($_POST['submit1']))
{
	$firstname=mysqli_real_escape_string($connect,$_POST[firstname]);
	$lastname=mysqli_real_escape_string($connect,$_POST[lastname]);
	$username=mysqli_real_escape_string($connect,$_POST[username]);
	$password=mysqli_real_escape_string($connect,$_POST[password]);
	$password=md5($password);
	$email=mysqli_real_escape_string($connect,$_POST[email]);
	$contact=mysqli_real_escape_string($connect,$_POST[contact]);
	$sem=mysqli_real_escape_string($connect,$_POST[sem]);
	$enrollmentno=mysqli_real_escape_string($connect,$_POST[enrollmentno]);

$query="select * from student_reg where username='$_POST[username]' or email='$_POST[email]'";
$d=mysqli_query($connect,$query);
$row=mysqli_num_rows($d);
if($row>0)
{
	header("location:registration.php?wrong=");

}
else
{
	$query="INSERT INTO student_reg VALUES('','$firstname','$lastname','$username','$password','$email','$contact','$sem','$enrollmentno','no','images/user.png','','')";
	mysqli_query($connect,$query);

	header("location:login.php?success=");	
	
}
}
?>
