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
        
        .abs {
            color: #FFFFFF;
        }
        
        * {
            box-sizing: border-box
        }
        
        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/headviolin.jpg");
            height: 50%;
            background-position: center;
            position: relative;
        }
        
        .hero-text {
            text-align: center;
            font-size: 25px;
            font-style: italic;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: black;
            padding: 0px;
            margin: 0px;
            border: 0px;
            font-family: Arial;
        }
        
        h1 {
            font-size: 50px;
        }
        
        h3:hover {
            color: green;
        }
        
        .row {
            height: 40%;
        }
        
        .row,
        .row>.column {
            padding: 10px;
        }
        
        .content {
            background-color: white;
            padding: 20px;
        }
        
        .column {
            float: left;
            width: 33.33%;
        }
        
        #btn {
            border: 2px solid green;
            background-color: white;
            color: green;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 16px;
        }
        
        #btn:hover {
            background-color: green;
            color: white;
        }
        
        .abc {
            background-color: rgb(133, 127, 127);
        }
        
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
        
        a {
            text-decoration: none;
        }
        
        button:hover {
            opacity: 0.8;
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
    </style>
</head>

<body>
    <ul>
        <li>
            <span><a class="active" href="mainlog.php"><img src="images/logo.png" alt="" width="30px" height="30px">
                        <h3>MUSIC LAB</h3></a></span>

        </li>
        <li>
            <a href="mainlog.php">
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

    <div class="hero-image">
        <div class="hero-text">
            <h1>VIOLIN</h1>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div class="content">
                <a href="violin1.php"><img src="images/violin1_1.jpeg" alt="guitar" width="60%" height="140%"></a>
                <h3>Kadence KAD-VIV-VIV1001 4/4 Semi- Acoustic Violin </h3>
                <p>₹7,999</p>
                <a href="violin1.php"><button id="btn">BUY</button></a>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <a href="violin2.php"><img src="images/violin2_1.jpeg" alt="acoustic" width="60%" height="140%"></a>
                <h3>Blueberry V-20-MA ( Imported ) 4/4 Classical (Modern) Violin</h3>
                <p>₹3,999</p>
                <a href="violin2.php"><button id="btn">BUY</button></a>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <a href="violin3.php"><img src="images/violin3_1.jpeg" alt="guitar" width="60%" height="148%"></a>
                <h3>Blazon SGV015G 4/4 Classical (Modern) Violin </h3>
                <p>₹4,499</p>
                <a href="violin3.php"><button id="btn">BUY</button></a>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <a href="violin4.php"><img src="images/violin4_1.jpeg" alt="guitar" width="60%" height="148%"></a>
                <h3>Trinity TNY_VPO1 4/4 Classical (Modern) Violin </h3>
                <p>₹3,999</p>
                <a href="violin4.php"><button id="btn">BUY</button></a>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <a href="violin5.php"><img src="images/violin5_1.jpeg" alt="guitar" width="60%" height="140%"></a>
                <h3>Kadence KAD-VIV-VIV0109 4/4 Semi- Acoustic Violin </h3>
                <p>₹5,999</p>
                <a href="violin5.php"><button id="btn">BUY</button></a>
            </div>
        </div>
        <div class="column">
            <div class="content">
                <a href="violin6.php"><img src="images/violin6_1.jpeg" alt="electric" width="60%" height="148.5%"></a>
                <h3>Infinity 4/4 Classical (Modern) Violin </h3>
                <p>₹7,500</p>
                <a href="violin6.php"><button id="btn">BUY</button></a>
            </div>
        </div>
    </div>

    <br><br><br>
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