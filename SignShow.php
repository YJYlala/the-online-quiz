<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/12/5
 * Time: 15:30
 */
include "connection.php";
$string1="SELECT MAX(UserID) FROM `user_info`";
$res1=mysqli_query($conn,$string1);
$row1=mysqli_fetch_row($res1);
$MaxId=$row1[0];
$string2="SELECT * FROM `user_info` WHERE UserID='".$MaxId."'";
$res2=mysqli_query($conn,$string2);
$row2=mysqli_fetch_array($res2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Congratulation</title>
</head>
<body>
<form class="form-control">
    <div align="center" class="container">
<h1 align="center">Your LoginID:<?php echo $MaxId;?></h1>
<button class="btn btn-info btn-sm " ><a href="login.php">Return</a></button>
    </div>
</form>
</body>
</html>
