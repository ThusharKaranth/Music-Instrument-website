<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        input[type=submit] {
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

<body style="background-color: black;">
    <ul>
        <li>
            <span><a href="main.html"><img src="images/logo.png" alt="" width="30px" height="30px">
                        <h3>MUSIC LAB</h3></a></span>

        </li>
        <li>
            <a class="active" href="main.html">
                <img src="images/home.svg" alt="" width="30px" height="30px">
                <h3>HOME</h3>
            </a>
        </li>
        <li>
            <a href="aboutus.html">
                <img src="images/contactus.svg" alt="" width="30px" height="30px">
                <h3>ABOUT US</h3>
            </a>
        </li>
        <li style="float:right">
            <a href="https://www.google.com/">
                <img src="images/search.svg" alt="" width="30px" height="30px">
                <h3>SEARCH</h3>
            </a>
        </li>
    </ul>

    <center>
        <div style="color: #808080;">
            <p style="color: white; font-size: 350%;">
                Violin Classes
            </p>

            <div>
                <iframe class="classes" width="894" height="503" src="https://www.youtube.com/embed/FqtyMQi87J4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <br><br>
        <div style="background-color: black;">
            <br>
            <br>
            <footer>
                <table width="100%">
                    <tr>
                        <td rowspan="10" style="width:100%;padding: 0 20px;" width="40%">
                            <form action="/action_page.php" class="newsletter">
                                <div class="container1">
                                    <h2 style="color: #ffa500;">Subscribe to our Newsletter
                                    </h2>
                                </div>

                                <div class="container1" style="background-color:black;">
                                    <input type="text" placeholder="Name" name="name" required>
                                    <input type="text" placeholder="Email address" name="mail" required><br>

                                    <span style="color: #ffa500;">
                                                            <label><input type="checkbox" checked="checked" name="subscribe">
                                                                Daily Newsletter
                                                            </label>
                                                        </span>
                                </div>

                                <div class="container1">
                                    <input type="submit" value="Subscribe">
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
                                <div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=pes%20university%2C%20outer%20ring%20road%2C%20banashankari%2C%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"
                                        marginheight="0" marginwidth="0"></iframe>
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
    </center>
</body>

</html>