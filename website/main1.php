<?php
     $con = mysqli_connect("localhost","id11673053_signup","signup","id11673053_signup");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $result = mysqli_query($con,"SELECT * FROM user");
while($row=mysqli_fetch_array($result))
{
    if($row[0]==$_POST['name']&&$row[3]==$_POST['password'])
    {
        setcookie('username', $row[0], time() + (86400 * 30), "/");
        setcookie("password", "", time() - 3600,"/");
        setcookie('password', $row[3], time() + (86400 * 30), "/");
        setcookie("email", "", time() - 3600,"/");
        setcookie('email', $row[1], time() + (86400 * 30), "/");
        setcookie("address", "", time() - 3600,"/");
        setcookie('address', $row[2], time() + (86400 * 30), "/");
 // 86400 = 1 day
        header("Location:mainlog.php");
    }
}
?>