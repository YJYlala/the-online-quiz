<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/12/5
 * Time: 15:01
 */
include "connection.php";
$string1="SELECT MAX(UserID) FROM `user_info`";
$res1=mysqli_query($conn,$string1);
$row1=mysqli_fetch_row($res1);
$MaxId=$row1[0]+1;
$type=0;
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$telephone=$_POST["telephone"];
$password=$_POST["password"];
$Birthday=$_POST["Birthday"];
$Sex=$_POST["Sex"];
$Age=$_POST["Age"];
$wholeName=$firstName.$lastName;
$string2="INSERT INTO `user_info` (`UserID`, `Type`, `PD`, `Name`, `Sex`, `Age`, `Birthday`, `Tel`) VALUES ('".$MaxId."','".$type."','".$password."','".$wholeName."','".$Sex."','".$Age."','".$Birthday."','".$telephone."')";
//echo $string2;
if($conn->query($string2)==true){
    echo"注册成功";
}else{
    echo "注册失败";
}
