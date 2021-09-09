<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-collapse: collapse;
        width:100%;
        /* color: #d96459; */
        /* font-family: monospace; */
        font-size: 15px;
        text-align: center;
        /* border-collapse: collapse; */
    }
    th{
        /* background: #D5D8DC  ; */
        border: 2px solid black;
        text-align: center;
        background-color: #A2D9CE;
        /* background-color: #fff; */
        /* background: #D5D8DC  ; */
    }
    td{
        /* background: #F2F3F4 ; */
        /* background: #D5D8DC  ; */
        border: 2px solid black;
        text-align: center;
    }
    body{
        /* background: #D5D8DC  ; */
    }
    </style>
</head>
<body>
<?php include 'header3.php'; ?>
    <br><br><br>
    <center><h1> Members Of Our Organization </h1></center>
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
            
            $sql ="SELECT * FROM join1";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                ?>
                <h2>Result are as follows:</h2>
               <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                <table width="50%" border="3" cellpadding="5" cellspacing="5">
                 <thead>
                        <tr>
                            <th> Name </th> 
                            <th> Email </th>
                            <th> Gender </th>
                            <th> Address </th>
                            <th> City </th>
                            <th> Contact Number </th>
                            <!-- <th> Location </th> -->
                            <!-- <th> Hematocrit </th>
                            <th> Weight </th>
                            <th> Hemoglobin </th>
                            <th> temperature </th>
                            <th>  </th>
                            <th> Hematocrit </th> -->
                        </tr>

                   <?php while( $row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                        <td><?php echo $row['fname']; ?> </td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['gender']; ?> </td>
                        <td><?php echo $row['address']; ?> </td>
                        <td><?php echo $row['city']; ?> </td>
                        <td><?php echo $row['phone']; ?> </td>
                        <!-- <td><?php echo $row['loc']; ?> </td> -->
                        <!-- <td><?php echo $row['hematocrit']; ?> </td> -->
                        </tr>
                        <?php
                    }
                    echo "</table>";
                }
                else
                echo "0 results";
                    ?>
</body>
</html>
