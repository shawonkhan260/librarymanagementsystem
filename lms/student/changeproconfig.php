
<?php
//--for update profile info--
include "connection.php";
if(isset($_POST['submit1']))
{
	$firstname=mysqli_real_escape_string($connect,$_POST[firstname]);
	$lastname=mysqli_real_escape_string($connect,$_POST[lastname]);
	$username=mysqli_real_escape_string($connect,$_POST[username]);
	$email=mysqli_real_escape_string($connect,$_POST[email]);
	$contact=mysqli_real_escape_string($connect,$_POST[contact]);
	$sem=mysqli_real_escape_string($connect,$_POST[sem]);
	$query="UPDATE student_reg set firstname='$firstname', lastname='$lastname', email='$email', contact='$contact', sem='$sem' where username='$username'";
	mysqli_query($connect,$query);
	header("location:profile.php?info");
}
//--for update Password--	
if(isset($_POST['submit3']))
{
	$username=mysqli_real_escape_string($connect,$_POST[username]);
	$password=mysqli_real_escape_string($connect,$_POST[password]);
	$password=md5($password);
	$query="UPDATE student_reg set  password='$password' where username='$username'";
	mysqli_query($connect,$query);
	header("location:profile.php?password=");
}
//--for upload new profile picture--	
if(isset($_POST['submit2']))
{
	$username=mysqli_real_escape_string($connect,$_POST[username]);
	$filename=$_FILES["image"]["name"];
    $temp=$_FILES["image"]["tmp_name"];
	$folder="images/".$filename;            
    move_uploaded_file($temp,$folder);
	$query="UPDATE student_reg set  image='$folder' where username='$username'";
	mysqli_query($connect,$query);
	header("location:profile.php?picture=");
}	

?>
