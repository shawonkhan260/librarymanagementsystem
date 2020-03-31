<?php
include "connection.php";
error_reporting(0);
if(isset($_POST[submittoken]))
{
	$token=mysqli_real_escape_string($connect,$_POST[token]);
	$query="select * from student_reg where token='$token' and tokenExpire > NOW()";
	$d=mysqli_query($connect,$query);
	$row=mysqli_fetch_array($d);
	if($row>0)
	{
		$url='forgetupdate.php?token='.$token;
		
		header("location:$url");
	}
	else
	{
		header("location:forgettoken.php?tokenerror=");
		
	}
	
}

?>
<?php
error_reporting(0);
$token=$_GET[token];
if(isset($_POST[submitpassword]))
{
	$password=mysqli_real_escape_string($connect,$_POST[password]);
	$password=md5($password);
	$query="update student_reg SET password='$password', token='',tokenExpire='' where token='$token'";
	mysqli_query($connect,$query) or die ('Unable to execute query. '. mysqli_error($link));
	header('location:login.php?password=');

	
}

?>