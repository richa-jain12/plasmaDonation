<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from join1 where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    
	
    $edit = mysqli_query($db,"update join1 set fname='$fname', email='$email' , address='$address' , phone='$phone' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:mRecord.php"); // redirects to all records page
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
  <input type="text" name="fname" value="<?php echo $data['fname'] ?>" placeholder="Enter Full Name" Required>
  <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Email" Required>
  <input type="text" name="address" value="<?php echo $data['address'] ?>" placeholder="Enter Full address" Required>
  <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Enter phone number" Required>
  <input type="submit" name="update" value="Update">
</form>