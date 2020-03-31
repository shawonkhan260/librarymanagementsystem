<?php
include "connection.php";
$a=$_GET['a'];
$query= "delete from book where id='$a'";
mysqli_query($connect,$query);
?>
<meta http-equiv="refresh" content="0;url=booklist.php" />