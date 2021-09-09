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
    <script src="https://kit.fontawesome.com/50fb9be233.js" crossorigin="anonymous"></script>

    <style>

        *{
            margin: 0;
            padding: 0;
            font-family: 'poopins',sans-serif;
            box-sizing: border-box;
        }

        body{
            /* background-color:black; */
            background-color :#EBF5FB
            /* background-color: #F9EBEA; */
        }

        .hero{
            width: 100%;
            /* height:100%; */
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color :#EBF5FB;
            /* background-color: #F9EBEA; */
            /* display: flex; */
            /* padding: px; */
            /* height: inherit; */
            /* background-color :#F4F6F6 */
        }        

        form{
            width: 90%;
            max-width: 600px;
        }

        .input-group{
            margin-bottom: 30px;
            position: relative;
        }

        input{
            width: 100%;
            padding: 10px;
            outline: 0;
            border: 1px solid white;
            border-color: black;
            color: black;
            background: transparent;
            font-size: 15px;
        }
        select{
            width: 100%;
            padding: 10px;
            outline: 0;
            border: 1px solid white;
            border-color: black;
            color: black;
            background: transparent;
            font-size: 15px;
        }
        se:focus~label,input:valid~label{
            top: -35px;
            font-size: 14px;
        }

        Label{
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            padding: 10px;
            color: black;
            cursor: text;
            transition: 0.2s;
        }

        input:focus~label,input:valid~label{
            top: -35px;
            font-size: 14px;
        }

        .row{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .row .input-group{
            flex-basis: 48%;
        }

        .btnclr:hover{
            background-color: #D7DBDD;
        }

    </style>  

</head>
<body>
    <?php include 'header2.php'; ?>
    <br><br><br>
    <div class="hero">
        <form action="" method="post" id="frmLogin" onSubmit="return validate();">
            <div class="demo-table"><br><br>
                <div class="form-head"><center><h2>Fill the form to check if donors of your blood group are available or not.</h2></center></div><br>

                <div class="input-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name"> <i class="fas fa-user"></i>&nbsp;Your Name</label>
                </div>
                <div class="input-group">
                    <input type="text" id="age" name="age" required>
                    <label for="age"><i class="fa fa-child" aria-hidden="true"></i></i>&nbsp;Age</label>
                </div>
                <div class="input-group">
                      <label for="blood_group"> <i class="fas fa-burn"></i></i>&nbsp;Blood Group</label>
                      <!-- <label for="blood_group"></i>&nbsp;Blood Group</label> -->
                      <select name="blood_group" class="form-control">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
             
                </div>
                
                </select>
            </div>               
                <input type="submit" name="submit" value="Submit" class="btnclr">
                  
                    </div>
                </div>

    </div><br><br><br><br><br>
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
            
if (isset($_POST['submit'])) {
 
    // $file = addslashes(file_get_contents($_FILES["report"]["tmp_name"]));
    $sql = "INSERT INTO `join`.`receiver`( `name`, `age`, `bg`)VALUES ('$_POST[name]','$_POST[age]','$_POST[blood_group]')";

    $query_run = mysqli_query($conn,$sql);

            
            $sql1 ="SELECT * FROM donor WHERE bloodgroup='$_POST[blood_group]'";
            $result = mysqli_query($conn, $sql1);

            if(mysqli_num_rows($result) > 0){
                
                echo "Plasma of your blood group is available, please check out our availability list and contact the available donor";
            }
            else{
                echo "Sorry! we are currently not left with donors of your blood group. We will notify you as soon as we our available with donor of your blood group.";}
}

            ?>
                    <br><br><br><br><br><br><br>
    <?php include 'footer.php'; ?>

</body>
</html>
