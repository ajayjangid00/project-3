<?php
include "connect.php";

$username=$_POST['username'];


$ch=mysqli_query($db,"SELECT * FROM user WHERE username='$username'");
$fdata=mysqli_fetch_array($ch);
if($fdata)
{
   
  header("location:passwordupdate.php");

}
else{
    echo "not fond";
}
?>