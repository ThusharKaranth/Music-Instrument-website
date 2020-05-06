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
            background-color: #292929;
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
        
        .abs {
            color: #FFFFFF;
        }
        
        * {
            box-sizing: border-box
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
    <div style="background-color: #292929;">
        <center>
            <h1 style="color: #808080;">Music Studios in Mumbai</h1><br>
            <h3 style="color: #ffffff;">Masterkey Studios</h3><br>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1000" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Masterkey%20Studios%20mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 1000px;
                        width: 1000px;
                    }
                    
                    .gmap_canvas {
                        overflow: hidden;
                        background: none!important;
                        height: 1000px;
                        width: 1000px;
                    }
                </style>
            </div>
            <br><br>
            <h3 style="color: #ffffff;">Bread Butter Jam Studio</h3><br>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1000" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Bread%20Butter%20Jam%20Studio%20mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 1000px;
                        width: 1000px;
                    }
                    
                    .gmap_canvas {
                        overflow: hidden;
                        background: none!important;
                        height: 1000px;
                        width: 1000px;
                    }
                </style>
            </div>
            <br><br>
            <h3 style="color: #ffffff;">Paresh Music Studio</h3><br>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1000" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Paresh%20Music%20Studio%20mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 1000px;
                        width: 1000px;
                    }
                    
                    .gmap_canvas {
                        overflow: hidden;
                        background: none!important;
                        height: 1000px;
                        width: 1000px;
                    }
                </style>
            </div>
            <br><br>
            <h3 style="color: #ffffff;">Amplitude Recording Studio</h3><br>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1000" height="1000" id="gmap_canvas" src="https://maps.google.com/maps?q=Amplitude%20Recording%20Studio%20mumbai&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 1000px;
                        width: 1000px;
                    }
                    
                    .gmap_canvas {
                        overflow: hidden;
                        background: none!important;
                        height: 1000px;
                        width: 1000px;
                    }
                </style>
            </div>
            <br><br>


        </center>

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
</body>

</html>