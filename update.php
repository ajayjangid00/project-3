<?php
include "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$forget=mysqli_query($db,"UPDATE user SET password='$password' WHERE username='$username'");
if($forget)
{
    echo "<script> alert('Password Updated')</script>";
    
}
else{
    echo"try again leter";
}
?>