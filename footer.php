<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
    <style>

.container1 {
    display: flex;
    flex-direction: column;
    background-color : #000000;
    position: relative;
    /* position: fixed; */
    width:100%;
    bottom : 0;
    padding-top : 5px;
    opacity: 0.89;
}

#social_icon_footer {
  float : right;
  padding-right : 20px;
}

#social_icon_footer a {

  color: #ffff;
}

#social_icon_footer .social:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

#social_icon_footer .social {
  -webkit-transform: scale(0.8);  
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
}


#social_icon_footer #social-fb:hover {
  color: #3B5998;
}

#social_icon_footer #social-tw:hover {
  color: #4099FF;
}

#social_icon_footer #social-in:hover {
    color:#e31e25;

}

a.text {
    float : left;
    padding : 20px;
    padding-left : 30px;

    color: #ffff;
}

body{
width: 100%;
  height: 100%;
  margin: 0%;
  padding: 0%;
}
    </style>
</head>
<body>
    <div class="container1">
        <footer class="container_footer">
           <a class="text">Copyright &copy; 2021 All Rights Reserved By Plasma Donor Management , India </a>
           <a>
           <section id="social_icon_footer">
            <div class="text-center center-block">
            <a class="text"> email : plasmadonor@gmail.com </a>
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook fa-3x social"></i></a>
	            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter fa-3x social"></i></a>
                <a href="https://instagram.com"><i id="social-in" class="fa fa-instagram fa-3x social" ></i></a>
            </div>
</section>
           </a>
        </footer>
       
    </div>
</body>
</html>