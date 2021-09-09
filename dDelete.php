<?php

include "dbConn.php"; // Using database connection file here

$sn = $_GET['sn']; // get id through query string

$del = mysqli_query($db,"delete from donor where sn='$sn'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:dRecord.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>