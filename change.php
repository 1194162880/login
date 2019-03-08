<?php 
header("Content-Type:text/plain");
$sid=$_REQUEST['sid'];
$uname=$_REQUEST['uname'];
$sex=$_REQUEST['sex'];
$mail=$_REQUEST['mail'];
$age=$_REQUEST['age'];
$phone=$_REQUEST['phone'];
$addr=$_REQUEST['addr'];
$conn=mysqli_connect('127.0.0.1','root','','users',3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="UPDATE student SET uname='$uname',sex='$sex',mail='$mail',age='$age',phone='$phone',addr='$addr' WHERE sid='$sid'";
$result=mysqli_query($conn,$sql);