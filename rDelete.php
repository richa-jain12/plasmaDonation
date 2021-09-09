<?php

include "dbConn.php"; // Using database connection file here

$sno = $_GET['sno']; // get id through query string

$del = mysqli_query($db,"delete from receiver where sno = '$sno'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:rRecord.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>