<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','join') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM register WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["username"] = $row['username'];
        $_SESSION["Email"] = $row['Email'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["username"])) {
    header("Location:receiver.php");
    }
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
            background-color :#EBF5FB
        }

        .hero{
            width: 100%;
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            /* background-color :#EBF5FB; */
    
            /* position:absolute;
    top:70%;
    left:10%;
    margin-left:-100px;
    margin-top:-300px;  */
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
        <?php include 'header.php'; ?>
        <br><br><br><br><br><br><br>
        <div class="hero">
            <form action="" method="post" id="frmLogin">

                <div class="demo-table">
                    <div class="form-head"><center><h1>Login</h1></center></div><br>
                    
                    <div class="input-group">
                        <input type="text" id="name" name="username" required>
                        <label for="name"> <i class="fas fa-user"></i>&nbsp;Your Name</label>
                    </div>
                    <div class="input-group">
                        <input type="password" id="pass" name="password" required>
                        <label for="pass"><i class="fas fa-shield-alt"></i>&nbsp;Password</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group">
                        <input type="submit" name="submit" value="Submit" class="btnclr">
                    </div>
                    <div class="input-group">
                        <input type="submit" name="Access without login" value="Register"  onclick="location.href='register.php'"class="btnclr">
                    </div>    
                </div>

                <input type="submit" name="Access without login" value="Acess" onclick="location.href='index.php'" class="btnclr">

            </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <?php include 'footer.php'; ?>
</body>
</html>