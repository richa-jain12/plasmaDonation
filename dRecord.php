<?php
session_start();
?>
<!DOCTYPE html>
<html> 
<head>
  <title>Display all records from Database</title>
  <style>
    table{
        border-collapse: collapse;
        width:100%;
        /* color: #d96459; */
        font-family: monospace;
        font-size: 17px;
        /* text-align: center; */
        /* border-collapse: collapse; */
    }
    th{
        background: #D5D8DC  ;
        border: 3px solid black;
        text-align: center;
        background-color: #A2D9CE;
    }
    td{
        background: #F2F3F4 ;
        border: 3px solid black;
        text-align: center;
    }
    body{
        background: #D5D8DC  ;
    }
    </style>
</head>

<?php
  include('header3.php');
?>
<br><br>
<br><br>
<center><h2>Donor Details</h2></center>
<center>
<table border="2">
  <tr>
    <th> Sno</th>
    <th> Name</th>
    <th> Age </th>
    <th> Blood Group </th>
    <th> Location </th>
    <th> Phone </th>
    <th> City</th>
    <th> Hematocrit </th>
    <th> Weight(in kg) </th>
    <th> Hemoglobin </th>
    <th> temperature(in F)</th>

    <th> Blood Pressure </th>
    <th> Pulse </th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from donor"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
 <tr>
    <td><?php echo $data['sn']; ?></td>
    <td><?php echo $data['name']; ?> </td>
    <td><?php echo $data['age']; ?> </td>
    <td><?php echo $data['bloodgroup']; ?> </td>
    <td><?php echo $data['loc']; ?> </td>
    <td><?php echo $data['phone']; ?> 
    <td><?php echo $data['loc']; ?></td>
    <td><?php echo $data['hematocrit']; ?> 
    <td><?php echo $data['weight']; ?> </td>
    <td><?php echo $data['hemoglobin']; ?> </td>
    <td><?php echo $data['temp']; ?> </td>
   
    <td><?php echo $data['bp']; ?></td>
    <td><?php echo $data['pulse']; ?></td>
    <td><a href="dEdit.php?sn=<?php echo $data['sn']; ?>">Edit</a></td>
    <td><a href="dDelete.php?sn=<?php echo $data['sn']; ?>">Delete</a></td>
  </tr>
<?php
}
?>
</center>
</table>

</body>
</html