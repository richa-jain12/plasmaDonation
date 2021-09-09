<?php

$db = mysqli_connect("localhost","root","","join");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>