<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Donation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



    <style>

      html, body {
      min-height: 100%;
      }

      body, div, form, input, select, textarea, label, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-size: 1em;
      color: #666;
      line-height: 22px;
      }

      h1{
       font-size: 60px;
       z-index: 2;
       line-height: 83px;
       top: 60px;
      }

      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #1c87c9;
      }

      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }

      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }

      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }

      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/cc6bc584f236c7234947015b89151ab6d04c4cbf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }

      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }

      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }

      input {
      width: calc(100% - 10px);
      padding: 5px;
      }

      input[type="date"] {
      padding: 4px 5px;
      }

      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }

      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }

      .checkbox input[type=checkbox] {
      display:inline-block;
      height:15px;
      width:15px;
      margin-right:5px;
      vertical-align:text-top;
      }

      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }

      .item {
      margin: 10px 0;
      }

      .item span {
      color: red;
      }

      .week {
      display:flex;
      justfiy-content:space-between;
      }

      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap: wrap;
      }

      .colums div {
      width:48%;
      }

      input[type=radio], input[type=checkbox]  {
      display: none;
      }

      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }

      .question span {
      margin-left: 30px;
      }

      .question-answer label {
      display: block;
      }

      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }

      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }

      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }

      input[type=radio]:checked + label:after {
      opacity: 1;
      }

      .flax {
      display:flex;
      justify-content:space-around;
      }

      .btn-block {
      margin-top: 10px;
      text-align: center;
      }

      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #1c87c9;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }

      button:hover {
      background:  #0692e8;
      }

      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }

      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }

      .name-item div input {
      width:97%;}

      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
    }
    </style>



  </head>

  <body>
    <div><?php include 'header.php';?></div>
    <br><br>

    <div class="testbox">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="banner">
                <h1>Donation Form</h1> 
            </div>  <br>
            <fieldset>
                <legend>Donor's Detail </legend>

                <div class="colums">

                      <div class="item">
                          <label for="name">Name<span>*</span></label>
                          <input id="name" type="text" name="name" required>
                      </div>

                      <div class="item">
                          <label for="blood-group">Blood Group<span>*</span></label><br>
                          <select name="bloodgroup" style="width: 614px; height:34px;" id="blood-group" required>
                              <option value="O+">O+</option>
                              <option value="O-">O-</option>
                              <option value="A+">A+</option>
                              <option value="A-">A-</option>
                              <option value="B+">B+</option>
                              <option value="B-">B-</option>
                              <option value="AB+">AB+</option>
                              <option value="AB-">AB-</option>
                          </select>
                      </div>

                      <div class="item">
                          <label for="age">Age<span>*</span></label>
                          <input id="age" type="number" name="age"  required>
                      </div>

                      <div class="item">
                          <label for="phone">Phone Number<span>*</span></label>
                          <input type="text" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits of your mobile number" name="phone" id="phone" required>
                      </div>

                      <div class="item">
                          <label for="gender">Gender<span>*</span></label><br>
                          <select id="gender" name="gender" style="width: 614px; height:34px;" required>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                      </div>

                      <div class="item">
                          <label for="date1">Date Of Birth<span>*</span></label>
                          <input id="date1" type="date"   name="date1" required>
                      </div>

                      <div class="item">
                          <label for="date">Recovery Date<span>*</span></label>
                          <input type="date"  name="date" required>
                    </div>

                    <div class="item">
                          <label for="loc">City<span>*</span></label>
                          <input id="loc" type="text"   name="loc" required>
                    </div>

                </div>
            </fieldset>

            <br>

            <fieldset>
                <legend>Donor's Health Details</legend>
                  
                <div class="colums">

                    <div class="item">
                          <label for="sym">Hematocrit<span>*</span></label>
                          <input id="sym" type="number"   name="hematocrit" step="any" required>
                      </div>

                      <div class="item">
                          <label for="sym">Hemoglobin<span>*</span></label>
                          <input id="sym" type="number"   name="hemoglobin" step="any" required>
                      </div>

                      <div class="item">
                          <label for="sym">Weight<span>*</span></label>
                          <input id="sym" type="number"   name="weight" step="any" required>
                      </div>

          
                      <div class="item">
                          <label for="sym">Temperature<span>*</span></label>
                          <input id="sym" type="number"   name="temp" step="any" required>
                      </div>

                      <div class="item">
                          <label for="sym">Pulse<span>*</span></label>
                          <input id="sym" type="number"   name="pulse" required>
                      </div>

                      <div class="item">
                          <label for="sym">Blood Pressure<span>*</span></label>
                          <input id="sym" type="text"   name="bp" required>
                      </div>

                      <div class="item">
                          <label for="report">Please submit your covid report here:<span>*</span> </label>
                          <input type="file" name="report" id="report">
                      </div>
              </fieldset>

              <div class="btn-block">
                    <button type="order" href="/" name="upload">Submit</button>
              </div>

        </form>
    </div>

    <div><?php include 'footer.php';?></div>

  </body>
</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="join";

$conn = mysqli_connect($servername, $username, $password, $db);

if(! $conn){
    die("Connection was not successful". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

error_reporting(0);

if (isset($_POST['upload'])) {
 
    $file = addslashes(file_get_contents($_FILES["report"]["tmp_name"]));
    $sql = "INSERT INTO `join`.`donor`( `name`, `bloodgroup`, `age`, `phone` ,`gender`, `dob`, `date`, `loc`, `hematocrit`,`hemoglobin`, `weight`,`temp`, `pulse`, `bp`, `report`)
    VALUES ('$_POST[name]','$_POST[bloodgroup]','$_POST[age]','$_POST[phone]','$_POST[gender]','$_POST[date1]','$_POST[date]','$_POST[loc]','$_POST[hematocrit]','$_POST[hemoglobin]','$_POST[weight]','$_POST[temp]','$_POST[pulse]','$_POST[bp]','$file')";

    $query_run = mysqli_query($conn,$sql);
    
  if($query_run)
  {
    echo '<script type="text/javascript"> alert("file Uploaded") </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("File Not Uploaded") </script>';
  }
  }

?>

