<?php

include "dbConn.php"; // Using database connection file here

$sn = $_GET['sn']; // get id through query string

$qry = mysqli_query($db,"select * from donor where sn='$sn'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{

    $sno = $_POST['sn'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $bloodgroup = $_POST['bloodgroup'];
    $loc = $_POST['loc'];
    $phone = $_POST['phone'];
    $hematocrit = $_POST['hematocrit'];
    $weight = $_POST['weight'];
    $hemoglobin = $_POST['hemoglobin'];
    $temp = $_POST['temp'];
    $sym = $_POST['sym'];
    $bp = $_POST['bp'];
    $pulse = $_POST['pulse'];
	
    $edit = mysqli_query($db,"update donor set name='$name', age='$age' , bloodgroup='$bloodgroup' , loc='$loc' , phone='$phone' , hematocrit='$hematocrit' , weight='$weight' , hemoglobin='$hemoglobin' , temp='$temp' , sym='$sym' , bp='$bp' , pulse='$pulse'   where sn='$sn'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:dRecord.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>
<pre>
<form method="POST">
  Name:             <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Name..." Required><br>
  Age:              <input type="text" name="age" value="<?php echo $data['age'] ?>" placeholder="Age..." Required><br>
  Blood Group:      <input type="text" name="bloodgroup" value="<?php echo $data['bloodgroup'] ?>" placeholder="Blood Group..." Required><br>
  Location:         <input type="text" name="loc" value="<?php echo $data['loc'] ?>" placeholder="Location..." Required><br>
  Contact Number:   <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Contact Number..." Required><br>
  Hematocrit:       <input type="text" name="hematocrit" value="<?php echo $data['hematocrit'] ?>" placeholder="Hematocrit..." Required><br>
  Weight:           <input type="text" name="weight" value="<?php echo $data['weight'] ?>" placeholder="Weight..." Required><br>
  Hemoglobin:       <input type="text" name="hemoglobin" value="<?php echo $data['hemoglobin'] ?>" placeholder="Hemoglobin..." Required><br>
  Temperature:      <input type="text" name="temp" value="<?php echo $data['temp'] ?>" placeholder="Temperature..." Required><br>
  Symptoms:         <input type="text" name="sym" value="<?php echo $data['sym'] ?>" placeholder="Symptoms..." Required><br>
  Blood Pressure:   <input type="text" name="bp" value="<?php echo $data['bp'] ?>" placeholder="Blood Pressure..." Required><br>
  Pulse:            <input type="text" name="pulse" value="<?php echo $data['pulse'] ?>" placeholder="Pulse..." Required><br>
  <input type="submit" name="update" value="Update">
</form>
<pre>