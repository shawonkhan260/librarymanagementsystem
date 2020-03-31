<?php
error_reporting(0);
include "connection.php";
session_start();
if(isset($_POST['submit1']))
{
	$count=0;
	$_POST[username]=mysqli_real_escape_string($connect,$_POST[username]);
	$_POST[password]=mysqli_real_escape_string($connect,$_POST[password]);
	$_POST[password]=md5($_POST[password]);
	$query="select * from librarian_reg where username='$_POST[username]' && password='$_POST[password]'";
	$data=mysqli_query($connect, $query);
	$count=mysqli_num_rows($data);
	if($count==0)
	{ 
		
		header("location:llogin.php?alert=");
	}

	else
	{
		$_SESSION["luser"]=$_POST["username"];
		header('location:dashboard.php');
	}

}	

?>