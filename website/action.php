
<?php

    $con = mysqli_connect("localhost","id11673053_signup","signup","id11673053_signup");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM user");
  if (isset($_POST['submit']))
  {
    $u=$_POST['name'];
    $e=$_POST['email'];
    $add=$_POST['address'];
    $pass=$_POST['psw'];
    $c = 0;
    while($row = mysqli_fetch_array($result)){
        if($row[0]==$_POST['name']){
            $c = 1;
        }
   
    }
    if($c)
    {
             echo"<script> alert('Username already Existed');</script>";
             header("Location:mainlog.php");

    }
    else{
        mysqli_query($con,"INSERT INTO user (username,email,address,password)
        VALUES ('$u','$e','$add','$pass')");
    }
  }
  else{
     echo "FUCK";
  }


mysqli_close($con);

?>