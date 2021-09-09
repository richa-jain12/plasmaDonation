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
<center><h2>Receiver Details</h2></center>
<center>
<table border="2">
  <tr>
    <th>Sr.No.</th>
    <th>Full Name</th>
    <th>Age</th>
    <th>Blood Group</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from receiver"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
 <tr>
 <td><?php echo $data['sno']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['age']; ?></td>
    <td><?php echo $data['bg']; ?></td>
    <td><a href="rEdit.php?sno=<?php echo $data['sno']; ?>">Edit</a></td>
    <td><a href="rDelete.php?sno=<?php echo $data['sno']; ?>">Delete</a></td>
  </tr>
<?php
}
?>
</center>
</table>

</body>
</html