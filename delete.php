<?php 
header("Content-Type:text/html");
$sid=$_REQUEST['sid'];
$conn=mysqli_connect('127.0.0.1','root','','users',3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="DELETE FROM student WHERE sid=$sid";
$result=mysqli_query($conn,$sql);
?>