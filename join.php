<html>
<head>
<title>Join Us</title>
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
    background-position: center;
    background-size: cover;
   display: flex;
   align-items: center;
   justify-content: center;
   background-color: #F9EBEA;
}
select{
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
    transition: 0.6s;
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
 #button1:hover{
      background-color: cornsilk;}


</style>

<body>
<?php include 'header.php'; ?> 
    <div class="hero">
        <form method="post" id="frmLogin" onSubmit="return validate();">
            <div class="demo-table"><br><br>    
                <!-- Join our community and reach out your hands for the others in need. Just by registering below you will make an agreement with us that you are ready to donate and will be available whenever we will need you. -->
                Join our community and reach out your hands for the others in need. Help us organize camps, donate and be a part of our organization. 
                <br><br><br>
                <div class="row"> 
                     <div class="input-group">
                     <input name="fname" type="text" id="name" required>
                     <label for="name"> <i class="fas fa-user"></i>&nbsp; Name</label>
                     </div>
                     <div class="input-group">
                        <input name="email" type="text" id="lname" required>
                     <label for="email"> <i class="fas fa-user"></i>&nbsp;Email</label>
              </div>
          </div>
              <div class="input-group">
                   Gender
                     
                      <select id="gender" name="gender" style="width: 599px; height:37px;" required ><i class="fas fa-user"></i>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
              </div>
             
              </div>
              <div class="input-group">
                    <input name="address" type="text" id="address" required>
                     <label for="add"> <i class="fas fa-house-user"></i>&nbsp;Address</label>

              </div>
                      <div class="input-group">
                    <input name="city" type="text" id="city" required>
                     <label for="city"> <i class="fas fa-map-marker-alt"></i>&nbsp;City</label>
                     
              </div>
                <div class="input-group">
                    <input type="text" id="phone" name="phone" required >
                     <label for="phn"> <i class="fas fa-phone-alt"></i>&nbsp;Phone Number</label>
                     
              </div>
                     <div class="input-group">
                   <label></label>
                   <input type="file" id="image" name="image">
                     
                </div>
                            <input type="submit" name="upload" value="Join" id="button1">
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
error_reporting(0);

if(isset($_POST['upload']))
{
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $phone = $_POST['phone'];
  $image = $_POST['image'];


  $query = "INSERT INTO `join1`(`email`,`fname`,`gender`,`address`,`city`,`phone`,`image`) VALUES ('$email','$fname','$gender','$address','$city','$phone','$image')";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Record Uploaded") </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Record Not Uploaded") </script>';
  }
}  