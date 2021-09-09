<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    table{
        border-collapse: collapse;
        width:100%;
        /* color: #d96459; */
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
    th{
        background: #F0B27A  ;
    }
    td{
        background: #F6DDCC ;
    }
    body{
        background-color: #F7F2EF ;
    }
    </style>
</head>
<body>
<center><h1> Donor List </h1></center>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "donor1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(! $conn){
    die("Connection was not successful". mysqli_connect_error());
}

$sql = "SELECT * FROM donor2 WHERE bg='$_POST[blood_group]'";
$result = mysqli_query($conn, $sql);



if(mysqli_num_rows($result) > 0){
    //output data for each row
    echo"<table border=1>";
    echo "<tr>
    <th>Name</th>
    <th>Blood group</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Symptoms</th>
    <th>Contact number</th>
    <th>Location</th>
    </tr>";
    while( $row = mysqli_fetch_assoc($result)){

     
        echo "<tr><td>".$row["name"]."</td><td>".$row["bg"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["symptoms"]."</td><td>".$row["contactno"]."</td><td>".$row["location"]."</td></tr><br>";
       
    }   
    echo "</table>"  ;
}
else{
    echo "0 results";
}
?>
</body>
</html>