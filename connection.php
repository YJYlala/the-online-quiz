<?php
/**
 * Created by PhpStorm.
 * User: 杨景优
 * Date: 2018/8/8
 * Time: 17:37
 */
$servername="localhost";
$username="root";
$password="";
$table="psychological_test";

$conn=new mysqli($servername,$username,$password,$table);
if ($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$record=fopen("teachersubject.txt","r+")or die("unable to open the file");
$record1=fopen("teachernum.txt","r+")or die("unable to open the file");
$record2=fopen("studentsubject.txt","r+")or die("unable to open the file");
$record3=fopen("studentnum.txt","r+")or die("unable to open the file");
$record4=fopen("checkanswer.txt","r+")or die("unable to open the file");
$loginid=fopen("loginid.txt","r+")or die("unable to open the file");
