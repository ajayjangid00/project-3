<?php
include "connect.php";


$username=$_POST['username'];
$password=$_POST['password'];

if($username=="")
{
    echo "Plese Enter mo";
}
else if($password=="")
{
    echo "password ";
}
else{
    $check=mysqli_query($db,"SELECT * FROM user WHERE username='$username'  AND password='$password'");
   $row=mysqli_num_rows($check);
   if($row==1)
   {
       $fetch=mysqli_fetch_array($check);
      $_SESSION['myid']=$fetch['id'];
      $_SESSION['myusername']=$fetch['username'];

      header("location:index.php");
   }
   else{
    header("location:login.php");
   }
}

?>