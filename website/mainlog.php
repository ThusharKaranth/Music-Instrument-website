<?php

    $con = mysqli_connect("localhost","id11673053_signup","signup","id11673053_signup");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM newsletter");
  if (isset($_POST['submit']))
  {
    $u=$_POST['name'];
    $e=$_POST['email'];
    $c = 0;
    while($row = mysqli_fetch_array($result)){
        if($row[0]==$_POST['name']){
            $c = 1;
        }
   
    }
    if($c)
    {
             echo "<script>alert('Already Subscribed!!!!!')</script>";
             
    }
    else{
        mysqli_query($con,"INSERT INTO newsletter (name,email)VALUES ('$u','$e')");
        if (isset($_POST["email"])) 
        {
        $to = $_POST['email'];
        $subject = "Message $u from Music Lab Website";
        $message = "$u Welcome To Music Lab.\nThanks For Subscribing.";
        $from = "tusharkaranth@gmail.com";
        mail($to,$subject,$message,$from);
            echo "<script>alert('Mail Sent Successfully!!!!!!!')</script>";
        }
        else
        {
          echo "not sent";
        }
    }
    
  }


mysqli_close($con);

?>
<html>

<head>
    <title>MUSIC LAB</title>
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <style>
        .newsletter {
            border: 3px solid black;
            font-family: Arial;
        }
        
        .container1 {
            background-color: black;
            padding: 0 10px;
        }
        
        input[type=text],
        input[type=submit],input[type=email] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid black;
            box-sizing: border-box;
        }
        
        input[type=checkbox] {
            margin-top: 30px;
        }
        
        input[type=submit] {
            background-color: #ffa500;
            color: black;
            border: none;
            width: 100%;
        }
        
        input[type=submit]:hover {
            opacity: 0.8;
        }
        
        body {
            border: 0px;
            margin: 0px;
            padding: 0px;
            background-color: black;
        }
        
        .active {
            background-color: black;
            color: #ffa500;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ffa500;
        }
        
        li {
            float: left;
        }
        
        li a {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            display: block;
            color: black;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
            background-color: black;
            color: #ffa500;
        }
        /* Full-width inputs */
        
        .container [type=text],
        input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ffffff;
            box-sizing: border-box;
            color: black;
            border-radius: 16px;
        }
        /* Set a style for all buttons */
        
        button {
            background-color: #ffa500;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            border-radius: 16px;
        }
        /* Add a hover effect for buttons */
        
        a {
            text-decoration: none;
        }
        
        button:hover {
            opacity: 0.8;
        }
        /* Extra style for the cancel button (red) */
        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f4511e;
        }
        
        .container {
            padding: 16px;
        }
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #292929;
            outline: none;
            color: #FFFFFF;
        }
        
        span.psw {
            float: center;
            padding-top: 16px;
            color: #ffffff;
        }
        
        .abs {
            color: #FFFFFF;
        }
        
        * {
            box-sizing: border-box
        }
        
        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }
        
        img {
            vertical-align: middle;
        }
        
        .button-side {
            display: inline-block;
            border-radius: 30px;
            background-color: black;
            border: none;
            color: #ffa500;
            text-align: center;
            transition: all 0.5s;
            cursor: pointer;
        }
        
        .button-side span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        
        .button-side span:after {
            content: "\00bb";
            font-size: 40px;
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        
        .button-side:hover span {
            padding-right: 25px;
        }
        
        .button-side:hover span:after {
            opacity: 1;
            right: 0;
        }
        /* On smaller screens, decrease text size */
        
        @media only screen and (max-width: 300px) {
            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
        
        .main {
            background-color: black;
            color: #ffffff;
            width: 80%;
            height: 100%;
        }
        
        @media screen and (min-width:768px) and (max-width:1024px) {
            .main {
                width: 200px;
                height: 100px;
            }
            .main2 {
                width: 20px;
                height: 20px;
            }
        }
        
        @media screen and (min-width:0px) and (max-width:768px) {
            .main {
                width: 100px;
                height: 80px;
            }
            .main2 {
                width: 20px;
                height: 20px;
            }
            .size {
                font-size: 100%;
            }
        }
        /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
        
        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 400px;
            padding: 10px;
            /* border: 1px solid #f1f1f1; */
            perspective: 1000px;
            /* Remove this if you don't want the 3D effect */
        }
        /* This container is needed to position the front and back side */
        
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }
        /* Do an horizontal flip when you move the mouse over the flip box container */
        
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        /* Position the front and back side */
        
        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        /* Style the front side (fallback if image is missing) */
        
        .flip-card-front {
            background-color: #292929;
            color: black;
        }
        /* Style the back side */
        
        .flip-card-back {
            background-color: #ffa500;
            color: black;
            transform: rotateY(180deg);
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>

<body>
    <ul>
        <li>
            <span><a href="mainlog.php"><img src="images/logo.png" alt="" width="30px" height="30px">
                <h3>MUSIC LAB</h3></a></span>

        </li>
        <li>
            <a class="active" href="mainlog.php">
                <img src="images/home.svg" alt="" width="30px" height="30px">
                <h3>HOME</h3>
            </a>
        </li>
        <li>
            <a href="aboutus.php">
                <img src="images/contactus.svg" alt="" width="30px" height="30px">
                <h3>ABOUT US</h3>
            </a>
        </li>
        <li style="float:right">
            <a href="https://www.flipkart.com/search?q=musical%20instrument&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off">
                <img src="images/search.svg" alt="" width="30px" height="30px">
                <h3>SEARCH</h3>
            </a>
        </li>
    </ul>

    <div style="background-color: black">
        <br>
        <br>

        <br>
        <ul style="background-color: black">
            <center>
                <li>
                    <div class="flip-card fadeInRightBig">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/piano.jpg" alt="" width="300px" height="400px">
                            </div>
                            <div class="flip-card-back">
                                <center>
                                    <h1>Piano</h1>
                                    <p>“Life is like a piano. What you get out of it depends on how you play it.” ~ Tom Lehrer</p>
                                </center>

                            </div>
                        </div>
                    </div>
                </li>
            </center>
            <center>
                <li>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/guitar.jpg" alt="" width="300px" height="400px">
                            </div>
                            <div class="flip-card-back">
                                <center>
                                    <h1>Guitar</h1>
                                    <p>"If we replaced guns with guitars, then the world would be a concert" ~ Thomas Ian Nicholas</p>
                                </center>

                            </div>
                        </div>
                    </div>
                </li>
            </center>
            <center>
                <li>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/trumpet.jpeg" alt="" width="300px" height="400px">
                            </div>
                            <div class="flip-card-back">
                                <center>
                                    <h1>Trumpet</h1>
                                    <p>“Life is like a trumpet. If you don't put anything into it, you don't get anything out." ~ W.C Handy</p>
                                </center>

                            </div>
                        </div>
                    </div>
                </li>
            </center>
            <center>
                <li>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/violin.jpg" alt="" width="300px" height="400px">
                            </div>
                            <div class="flip-card-back">
                                <center>
                                    <h1>Violin</h1>
                                    <p>"Life is like playing a violin solo in public and learning the instrument as one goes on." ~ Samuel Butler</p>
                                </center>

                            </div>
                        </div>
                    </div>
                </li>
            </center>
            <center>
                <li>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="images/drums.jpg" alt="" width="300px" height="400px">
                            </div>
                            <div class="flip-card-back">
                                <center>
                                    <h1>Drums</h1>
                                    <p>“The insignificant, the empty, is usually the loud; and after the manner of a drum, is louder even because of its emptiness." ~ Thomas Carlyle</p>
                                </center>

                            </div>
                        </div>
                    </div>
                </li>
            </center>
        </ul>
        <br>
    </div>
    
    <div style="background-color: #808080;">
        <br>
        <br>
        <center>
            <div class="button" style="width: 90%;">
                <a href="instruments.php"><button class="button-side" style="width:40%;height:20%;"><span><img src="images/side4.ico" alt="" height="30px"><h2>Buy Instruments</h2></span></button></a>
                <a href="aboutus.php"><button class="button-side" style="width:40%;height: 20%;"><span><img src="images/side2.ico" alt="" height="30px"> <h2>About Us</h2></span></button></a>


            </div>
            <div class="button" style="width:90%;">
                <a href="studios.php"><button class="button-side" style="width:40%;height: 20%;"><span><img src="images/side1.ico" alt="" height="30px"><h2>Music Studios</h2></span></button></a>
                <a href="courses.php"><button class="button-side" style="width:40%;height: 20%;"><span><img src="images/side7.ico" alt="" height="30px"><h2>Music Courses</h2></span></button></a>


            </div>
        </center>

        <br>
        <br>
    </div>
    <div style="background-color: black;">
        <br>
        <br>
        <footer>
            <table width="100%">
                <tr>
                    <td rowspan="10" style="width:100%;padding: 0 20px;" width="40%">
                        <form class="newsletter" method="post">
                            <div class="container1">
                                <h2 style="color: #ffa500;">Subscribe to our Newsletter
                                </h2>
                            </div>

                            <div class="container1" style="background-color:black;">
                                <input type="text" placeholder="Name" name="name" required>
                                <input type="email" placeholder="Email address" name="email" required><br>

                                <span style="color: #ffa500;">
                                                        <label><input type="checkbox" checked="checked" name="subscribe">
                                                            Daily Newsletter
                                                        </label>
                                                    </span>
                            </div>

                            <div class="container1">
                                <input type="submit" value="Subscribe" name="submit">
                            </div>
                        </form>

                    </td>
                </tr>
                <tr>
                    <td width="5%" style="padding: 0 100px;">
                        <h2 style="color: #ffa500;">Follow us on:</h1>
                            <a href="https://www.instagram.com/">
                                <img src="images/instagram.svg" alt="" width="30px" height="30px">
                            </a>
                            <a href="https://www.facebook.com/">
                                <img src="images/facebook.svg" alt="" width="30px" height="30px">
                            </a>
                            <a href="https://twitter.com/">
                                <img src="images/twitter.svg" alt="" width="30px" height="30px">
                            </a>
                            <a href="https://www.snapchat.com/l/en-gb/">
                                <img src="images/snapchat.svg" alt="" width="30px" height="30px">
                            </a>
                    </td>
                    <td>
                        <center>
                            <h2 style="color: #ffa500;">Address:</h2>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="5%" style="padding: 0 100px;">
                        <h2 style="color: #ffa500;">Contact Us:</h2>
                        <h3 style="color: #ffa500;">E-mail Id:</h3>
                        <h3 style="color: #ffffff;">musiclab@gmail.com</h3>
                        <h3 style="color: #ffa500;">Contact Number:</h3>
                        <h3 style="color: #ffffff;">9448688191</h3>
                    </td>
                    <td style="padding: 0 100px;">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=pes%20university%2C%20outer%20ring%20road%2C%20banashankari%2C%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"></iframe>
                                <a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>
                            </div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 100%;
                                    width: 100%;
                                }
                                
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none!important;
                                    height: 100%;
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </td>
                </tr>

            </table>
            <br>
            <div>
                <center>
                    <h5 style="color: #808080;">
                        All Rights Reserved @PES University.
                    </h5>
                </center>

            </div>
        </footer>
        <br><br>
    </div>
</body>

</html>