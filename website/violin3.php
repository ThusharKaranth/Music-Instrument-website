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
        input[type=submit] ,input[type=email]{
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
            background-color: #F5F5F5;
        }
        
        .active {
            background-color: black;
            color: #ffa500;
        }
        
        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ffa500;
        }
        
        .label {
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
        
        .label a:hover:not(.active) {
            background-color: black;
            color: #ffa500;
        }
        
        a {
            text-decoration: none;
        }
        
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
        
        .instrument {
            width: 100px;
            height: 100px;
        }
        
        .contain {
            top: 40%;
            left: 3%;
            position: absolute;
        }
        
        ul.thumb {
            margin: 0 auto;
            padding: 0;
            float: left;
        }
        
        ul.thumb li {
            border-radius: 15px;
            List-style: none;
            margin: 5px;
            width: 100px;
            height: 100px;
            border: 1px solid rgba(0, 0, 0, .2);
            overflow: hidden;
        }
        
        ul.thumb li img {
            width: 100%;
        }
        
        .imgBox {
            border-radius: 25px;
            background-color: white;
            width: 450px;
            height: 600px;
            margin: 5px;
            border: 1px solid rgba(0, 0, 0, .2);
            overflow: hidden;
        }
        
        .imgBox img {
            width: 450px;
            height: 600px;
        }
        
        .description {
            background-color: white;
            padding: 15px 30px;
            border-radius: 25px;
            top: 41%;
            left: 43%;
            border: 1px solid rgba(0, 0, 0, .2);
            position: absolute;
        }
        
        .buy {
            top: 130%;
            left: 13%;
            position: absolute;
        }
        
        .buynow:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
        
        .buynow {
            border-radius: 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 20px 100px;
            text-align: center;
            font-size: 30px;
            margin: 4px 2px;
        }
        
        .submit {
            border-radius: 15px;
            background-color: #6495ED;
            color: white;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            margin: 4px 2px;
        }
        
        .submit:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
        
        .banner {
            background-color: black;
        }
        
        .category h2 {
            text-align: center;
            font-family: 'Alfa Slab One', cursive;
            ;
            font-size: 50px;
            font-weight: 200;
            margin: 0;
            padding: 50px 0;
            color: #fff;
        }
        
        .submitreview {
            top: 145%;
            left: 10%;
            padding: 5px 5px;
            width: 500px;
            position: absolute;
        }
        
        .review {
            width: 300px;
            height: 50px;
        }
    </style>
</head>

<body>
    <ul class="navbar">
        <li class="label">
            <span><a href="mainlog.php"><img src="images/logo.png" alt="" width="30px" height="30px">
                <h3>MUSIC LAB</h3></a></span>

        </li>
        <li class="label">
            <a class="active" href="mainlog.php">
                <img src="images/home.svg" alt="" width="30px" height="30px">
                <h3>HOME</h3>
            </a>
        </li>
        <li class="label">
            <a href="aboutus.php">
                <img src="images/contactus.svg" alt="" width="30px" height="30px">
                <h3>ABOUT US</h3>
            </a>
        </li>
        <li class="label" style="float:right">
            <a href="https://www.flipkart.com/search?q=musical%20instrument&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off">
                <img src="images/search.svg" alt="" width="30px" height="30px">
                <h3>SEARCH</h3>
            </a>
        </li>
    </ul>

    <div class="banner">
        <div class="category">
            <h2>VIOLIN</h2>
        </div>
    </div>
    <div class="contain">
        <ul class="thumb">
            <li><button id="button1" onclick="change()" style="background-color:orange;"><img class="instrument" src="images/violin3_1.jpeg"></button></li>
            <li><button id="button2" onclick="change1()"><img class="instrument" src="images/violin3_2.jpeg"></button></li>
            <li><button id="button3" onclick="change2()"><img class="instrument" src="images/violin3_3.jpeg"></button></li>
        </ul>
        <div class="imgBox"><img id="main" src="images/violin3_1.jpeg"></div>
    </div>
    <div class="buy">
        <a href="creditviolin3.php" class="buynow">BUY NOW</a>
    </div>
    <div class="description">
        <h1>Blazon SGV015G 4/4 Classical (Modern) Violin</h1>
        <h1>₹4499</h1>
        <h2>Description</h2>
        <p>4/4 imported violin (Blazon) with Hard case,Imported horse Hair Bow And Rosin</p>
        <h2>Specifications</h2>
        <h3>General</h3>
        <table cellspacing="30">
            <tr>
                <td>Brand</td>
                <td>Blazon</td>
            </tr>
            <tr>
                <td>Model Number</td>
                <td>SGV015G</td>
            </tr>
            <tr>
                <td>Brand Color</td>
                <td>Glossy Brown</td>
            </tr>
            <tr>
                <td>Type</td>
                <td>Classical (Modern)</td>
            </tr>
            <tr>
                <td>Body Material</td>
                <td>Basswood</td>
            </tr>
            <tr>
                <td>Fingerboard Material</td>
                <td>Maple</td>
            </tr>
            <tr>
                <td>Bow Hair Material</td>
                <td>White Horse Hair</td>
            </tr>
            <tr>
                <td>Color</td>
                <td>Brown</td>
            </tr>
            <tr>
                <td>Pickup Present</td>
                <td>No</td>
            </tr>
            <tr>
                <td>Case Present</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>Hand Orientation</td>
                <td>NA</td>
            </tr>
            <tr>
                <td>Model Name</td>
                <td>SGV015G</td>
            </tr>
            <tr>
                <td>Peg Material</td>
                <td>Maple</td>
            </tr>
        </table>
        <h3>Dimensions</h3>
        <table cellspacing="30">
            <tr>
                <td>Neck Length</td>
                <td>15 cm</td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>1000 g</td>
            </tr>
        </table>
    </div>
    <div class="submitreview">
        <h1>Reviews</h1>
        <p><label for="name"><h2>Name</h2></label></p>
        <p><input class="review" name="name" type="email"></p>
        <p><label for="email"><h2>Email</h2></label>
            <p>
                <p><input class="review" name="email" type="email"></p>
                <p><label for="review"><h2>Your review</h2></label></p>
                <p><textarea class="review" name="review" id="" cols="30" rows="10"></textarea></p>
                <a href="#" class="submit">SUBMIT</a>
    </div>

    <div style="background-color: black;position:absolute;top:223%;">
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
                                    text-align: center;
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

    <script>
        function change() {
            document.getElementById("main").src = "images/violin3_1.jpeg";
            document.getElementById("button1").style.backgroundColor = "orange";
            document.getElementById("button2").style.backgroundColor = "transparent";
            document.getElementById("button3").style.backgroundColor = "transparent";
        }

        function change1() {
            document.getElementById("main").src = "images/violin3_2.jpeg";
            document.getElementById("button1").style.backgroundColor = "transparent";
            document.getElementById("button2").style.backgroundColor = "orange";
            document.getElementById("button3").style.backgroundColor = "transparent";
        }

        function change2() {
            document.getElementById("main").src = "images/violin3_3.jpeg";
            document.getElementById("button1").style.backgroundColor = "transparent";
            document.getElementById("button2").style.backgroundColor = "transparent";
            document.getElementById("button3").style.backgroundColor = "orange";
        }
    </script>
</body>

</html>