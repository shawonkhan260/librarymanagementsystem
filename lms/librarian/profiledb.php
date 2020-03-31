<?php
include "header.php";
error_reporting(0);
$query="select * from librarian_reg where username='$_SESSION[luser]'";
$data=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($data))
{
	
	$fn=$row[firstname];
	$ln=$row[lastname];
	$un=$row[username];
	$email=$row[email];
	$contact=$row[contact];
	$pass=$row[password];
	$image=$row[image];
	
}
?>