<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/12/9
 * Time: 10:42
 */
include_once ("connection.php");
$advice=$_POST["advice"];
$loginid1=fread($loginid,100);
$time=date("Y-m-d H:i:s");
$string="INSERT INTO `suggestion`(`UserID`, `Suggestion`, `Suggestion_Time`) VALUES ('".$loginid1."','".$advice."','".$time."')";
if ($conn->query($string)==true){
    echo "submit successfully";
}else
    echo "something is wrong";