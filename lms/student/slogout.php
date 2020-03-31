<?php
//--here distroy session to logout--
session_start();
unset($_SESSION["suser"]);
header("location:login.php");
?>