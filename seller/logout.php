<?php 

session_start();

unset($_SESSION['ids']);

header("location:../login.php");

 ?>