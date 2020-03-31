<?php
error_reporting(0);
include "connection.php";
session_start();
if(isset($_POST['submit2']))
{
	$_POST[username]=mysqli_real_escape_string($connect,$_POST[username]);
	$_POST[password]=mysqli_real_escape_string($connect,$_POST[password]);
	$_POST[password]=md5($_POST[password]);
	$count=0;
	$query="select * from student_reg where username='$_POST[username]' && password='$_POST[password]' && status='yes'";
	$data=mysqli_query($connect, $query);
	$count=mysqli_num_rows($data);
	if($count==0)
	{ 
		
		header("location:login.php?alert=");
	}

	else
	{
		//$_SESSION['is_login']=$true;
		$_SESSION["suser"]=$_POST["username"];
		//$ss=$_POST["username"];
		//$_SESSION['last_login_timestamp']=time();
		header('location:home.php');
	}

}	

?>