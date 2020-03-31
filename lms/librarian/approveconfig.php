<?php
include "connection.php";
$id=$_GET['id'];
$query="update student_reg set status='yes' where id=$id";
$data=mysqli_query($connect,$query);
header('location:nstudentlist.php');
?>