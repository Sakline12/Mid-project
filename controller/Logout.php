<?php
Session_start();
unset($_SESSION['username']);
header("location:../views/Login.php");

?>