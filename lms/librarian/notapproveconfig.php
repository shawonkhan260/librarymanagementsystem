<?php
include "connection.php";
$id=$_GET["id"];
$query="UPDATE student_reg set status='no' where id='$id' ";
$data=mysqli_query($connect,$query);
header('location:studentlist.php');
?>