<?php

include "dbConn.php"; // Using database connection file here

$sno = $_GET['sno']; // get id through query string

$qry = mysqli_query($db,"select * from receiver where sno='$sno'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{

    $name = $_POST['name'];
    $age = $_POST['age'];
    $bg = $_POST['bg'];
    
	
    $edit = mysqli_query($db,"update receiver set name='$name', age='$age' , bg='$bg'  where sno='$sno'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:rRecord.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="age" value="<?php echo $data['age'] ?>" placeholder="Enter Age" Required>
  <input type="text" name="bg" value="<?php echo $data['bg'] ?>" placeholder="Enter Blood Group" Required>
  <input type="submit" name="update" value="Update">
</form> 