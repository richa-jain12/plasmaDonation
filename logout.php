<?php
session_start();
unset($_SESSION["mobile"]);
unset($_SESSION["username"]);
header("Location:login.php");
?>