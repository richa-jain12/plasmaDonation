<html>
<head>
<title>User Login</title>
<link href="./view/css/style.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/50fb9be233.js" crossorigin="anonymous"></script>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'poopins',sans-serif;
    box-sizing: border-box;

}
.hero{

    width: 100%;
    height:100vh;
    background-image:url() ;
    background-position: center;
    background-size: cover;
   display: flex;
   align-items: center;
   justify-content: center;
   background-color: #F9EBEA;

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
</style>
<script>

    </script>

<body bgcolor="black">
<?php include 'header.php'; ?>  

    <div class="hero">
        <form action="" method="post" id="frmLogin" >
            <div class="demo-table">

                <CENTER><div class="form-head"><h1>Register</h1></div></CENTER><BR><BR>
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="row">
   					<div class="input-group">
						<input name="username" type="text" id="name" required>
						<label for="name"> <i class="fas fa-user"></i>Your Name</label>
							</div>
							<div class="input-group">
                            <input type="text" maxlength="10" pattern="\d{10}" 
                            title="Please enter exactly 10 digits of your mobile number" name="mobile" id="phone" required>
						
							<label for="number"><i class="fas fa-phone-volume"></i>Phone No.</label>
							</div>
							</div>
							<div class="input-group">
							<input type="text" id="mail"  name="Email"required>
							<label for="email"><i class="fas fa-envelope-square"></i>Email</label>
							</div>
                            <div class="input-group">
                            <input type="text" id="city_state" name="city_state" required>
                            <label for="city_state"> <i class="fas fa-user"></i>&nbsp;City and State</label>
                            </div>
                              <div class="input-group">
                              <input type="password" id="pass" name="password" required>
                              <label for="pass"><i class="fas fa-shield-alt"></i>Password</label>
                                </div>
                         <div class="input-group">
                             <input type="password" id="cpass" name="cPassword" required>
                             <label for="cpass">Confirm Password</label>
                        </div>	
								</div>
                  <div class="row">
                   <div class="input-group">
                            <input type="submit" name="login" value="Login" onclick="location.href='login.php'">
                        </div>
                            <div class="input-group">
                            <!-- <input type="submit" name="register" value="Register" onclick="location.href='register.php'"> -->
                            <input type="submit" name="register" value="Register" onclick="matchPassword()"  >
                      </div>    
                    </div>
                            <input type="submit" name="Access without login" value="Acess Without Login" onclick="location.href='index.php'">
                </div>
            </div>
        </form>
        
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>



<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, 'join');

if(isset($_POST['register']))
{
  $username = $_POST['username'];
  $mobile = $_POST['mobile'];
  $Email = $_POST['Email'];
  $city_state = $_POST['city_state'];
  $password = $_POST['password'];
  $cpassword = $_POST['cPassword'];

  if($_POST['password'] != $_POST['cPassword']){

    echo '<script type="text/javascript"> alert("Record not Uploaded as password and confirm password do not match") </script>';
    exit();
  }
  else
  {
    
    echo '<script type="text/javascript"> alert("passwords matched") </script>';
   
  }
  $query = "INSERT INTO `register`(`username`,`mobile`,`Email`,`city_state`,`password`,`cPassword`) VALUES ('$username','$mobile','$Email','$city_state','$password','$cpassword')";
  $query_run = mysqli_query($conn,$query);

  if($query_run){
    echo '<script type="text/javascript"> alert("Record Uploaded") </script>';
  }
 
}
?>