<?php
include "connect.php";
if(isset($_SESSION['myid']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Log out</a>
    <h2>helo profile</h2>
</body>
</html>
<?php
}
?>