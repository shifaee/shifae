<?php 
session_start();
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_NAME']);
header("location:signIn.php");
die();
?>