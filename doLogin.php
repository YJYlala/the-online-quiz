<?php
/**
 * Created by PhpStorm.
 * User: 杨景优
 * Date: 2018/11/11
 * Time: 22:35
 */
include_once("connection.php");
$username=$_POST["userName"];
$pwd=$_POST["pwd"];
$string1="SELECT * FROM `user_info` WHERE `UserID` = $username";
$res=mysqli_query($conn,$string1);
file_put_contents("loginid.txt","");
fwrite($loginid,$username);
if ($row=mysqli_fetch_array($res))
{
    if ($row["PD"]==$pwd)
    {
        if ($row["Type"]=="1")
            echo "管理员登录成功"; //
        else
            echo "用户登录成功";//
    }
    else
    echo "密码错误";    //
}
else
    echo "用户不存在"; //

mysqli_free_result($res);
mysqli_close($conn);