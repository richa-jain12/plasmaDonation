<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styledo.css">
    <title>Document</title>
    <style type="text/css">
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
        /* background: #D5D8DC  ; */
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
    /* .class1{
        width: 10%;
        height:1000%;
    } */
    </style>
    </head>
    <body>
    <?php include 'header2.php' ?>
        <!-- <div class="modal">   -->
            <!-- <div class="container"> -->
    <body>

    <br><br>
    <center>
        <h1>Check here for Available donors</h1>
        <br>
            <form class="form-inline" role='form' method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
                <label class="form-label">Enter city name </label>
                <!-- <select name="blood_group" class="form-control">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select> -->
                <input type="text" name="city" placeholder="Enter your city..." class="class1">
                <button type="submit" class="btn btn-success" name="searchBtn">Check</button>
            </form>
    </center>
    <br><br><br>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "join";
            
            $conn = mysqli_connect($servername, $username, $password, $database);
            
            
            if(! $conn){
                die("Connection was not successful". mysqli_connect_error());
            }
            
            error_reporting(0);
            
            $sql ="SELECT * FROM donor WHERE loc='$_POST[city]'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                ?>
                <h2>Result are as follows:</h2>
               <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                <table width="50%" border="3" cellpadding="5" cellspacing="5">
                 <thead>
                        <tr>
                            <th> Name </th> 
                            <th> Blood Group </th>
                            <th> Age </th>
                            <th> Gender </th>
                            <th> DOB </th>
                            <th> Contact Number </th>
                            <th> Location </th>
                            <th> Hematocrit </th>
                            <th> Weight(in kg) </th>
                            <th> Hemoglobin </th>
                            <th> temperature(in F)</th>
                            <!-- <th> Symptoms</th> -->
                            <th> Blood Pressure </th>
                            <th> Pulse </th>
                        </tr>

                   <?php while( $row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                        <td><?php echo $row['name']; ?> </td>
                        <td><?php echo $row['bloodgroup']; ?> </td>
                        <td><?php echo $row['age']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td><?php echo $row['dob']; ?> </td>
                        <td><?php echo $row['phone']; ?> </td>
                        <td><?php echo $row['loc']; ?> </td>
                        <td><?php echo $row['hematocrit']; ?> 
                        <td><?php echo $row['weight']; ?> </td>
                        <td><?php echo $row['hemoglobin']; ?> </td>
                        <td><?php echo $row['temp']; ?> </td>
                        <td><?php echo $row['bp']; ?></td>
                        <td><?php echo $row['pulse']; ?></td>
                        </tr>
                        <?php
                    }
                    echo "</table>";
                }
                else
                echo "0 results";
                    ?>
                        <br><br><br>

<div>
    <?php 
        // include 'footer.php';
    ?>
</div> 
 
</body>
</html>
