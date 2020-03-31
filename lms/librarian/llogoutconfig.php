<?php
session_start();
unset($_SESSION["luser"]);
header("location:llogin.php");
?>