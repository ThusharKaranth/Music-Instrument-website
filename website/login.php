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
    $pass=$_POST['password'];
    $c = 0;
    while($row = mysqli_fetch_array($result) )
    {
        if($row[0]==$_POST['name'] && $row[3]==$_POST['password'])
        {
            echo "$row[0]";
            echo "$row[3]";
           
            header('Location:../mainlog.php');
        
   
        
       
        }
    }
  }
  else{
     echo "FUCK";
  }


mysqli_close($con);

?>