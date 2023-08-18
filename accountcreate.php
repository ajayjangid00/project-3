<?php
include "connect.php";

$mobile=$_POST['mobile'];
$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];

if($mobile=="")
{
    echo "Plese Enter Name";
}
else if($username=="")
{
    echo "username ";
}
else if($name=="")
{
    echo "name";
}
else if($password=="")
{
    echo "password ";
}
else{
    $insert=mysqli_query($db,"INSERT INTO user SET mobile='$mobile',username='$username',name='$name',password='$password'");
    $chekd=mysqli_query($db,"SELECT * FROM user WHERE username='$username'");
    $rows=mysqli_num_rows($chekd);
    if($rows==1)
    {
        $fetch=mysqli_fetch_array($chekd);
       $_SESSION['myid']=$fetch['id'];
       $_SESSION['myusername']=$fetch['username'];
 
       header("location:profile.php");
    }
}

?>