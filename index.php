<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="index1.css">
    <title>Document</title>
    <style>
        .card {
            display: inline;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            height : 250px;
            width : 33%;
            margin: auto;
            text-align: center; 
            transition: 0.3s;
            padding : 10px;
            }

        .card:hover {
            box-shadow: 0 10px 20px 0 rgba(0,0,0,0.2);
            }

        .card_container {
            padding: 2px 16px;
            }
        
    </style>
</head>
<body>
    <?php include 'header.php';?>
    <div>
        <img src="banner1.jpg" id="img1">
    </div>
    <br><br>
    <div class="d1" style= background:#F4F6F6>   
    <center> 
        <a href="#" class="Heading">Why Are We Here For?</a>
        <p class="About">
        <font color="black"> Plasma Bank Management System (PBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way.</font>
        </p>
        <p class="About">
        <font color="black"> If you have fully recovered from COVID-19, you may be able to help patients currently fighting the infection by donating your plasma. Because you fought the infection, your plasma now contains COVID-19 antibodies. These antibodies provided one way for your immune system to fight the virus when you were sick, so your plasma may be able to be used to help others fight off the disease..</font>
        </p>
        <br>
</center>
</div>
<br>
<div class="d2" style= background:#F4F6F6>  
        <center><a href="#" class="Heading">Features</a></center>
        <p class="About">
            <font color="black"> 
            - Plasma Donation Camp & Camp Organiser Management.<br>
            - Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.<br>
            - Inventory management in blood bank for storage and issuance of blood.<br>
            - Blood requisition and issuance of blood.<br>
            - Online transfer of blood from one blood bank to another.<br>
            - Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).<br>
            - Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.<br>
            - Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.<br>
            - Fridge Wise Stock Position and Printing of Fridge Stickers.<br>
            - List of Donors who are eligible for donation on a particular date with contact Number.<br>
            - Camp Wise Donor List and Printing of Donor Cards.<br>
</font>
        </p>  <br>  
    </div> 
  <br>
<div class="row">
  
            <?php
                $conn = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($conn,'join');

                $query = "SELECT * FROM `emp_details` ";
                $query_run = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <!-- <div class="card">
                        <?php echo '<img src="data: image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100px; height:100px">'; ?>
                        <div class="card_container">
                        <h2 style="color : aqua"><?php echo $row['name']; ?><h4>
                        <p><?php echo $row['designation']; ?></p>
                        </div>
                </div> -->
                    <?php
                }
            ?>
            </div>
            <?php 
                include 'footer.php';
            ?>
        </div> 
</body>
</html> 