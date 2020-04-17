<?php
/**
 * Created by PhpStorm.
 * User: 10732
 * Date: 2018/12/6
 * Time: 20:13
 */
include_once ("connection.php");
$subject=$_POST["subject"];
$num=$_POST["num"];
$answer=$_POST["answer"];
echo$subject.$num.$answer;
fwrite($record,$subject);
fwrite($record1,$num);
fwrite($record4,$answer);
