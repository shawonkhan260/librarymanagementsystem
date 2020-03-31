<?php
 include "connection.php";
 $id=$_GET['id'];
 $b=$_GET['b'];
 $date=date('Y-m-d');
 $d="update bookissue set bookreturndate='$date' where id=$id";
 mysqli_query($connect,$d);
 $return="update book set availableqty=bqty+1 where bname='$b'";
 mysqli_query($connect,$return);
 header("location:returnbook.php");
 
?>