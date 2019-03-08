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
$sql="INSERT INTO student VALUES (null,'$sid','$uname','$sex','$mail','$age','$phone','$addr')";
$result = mysqli_query($conn,$sql);
if($result) {
    echo "提交成功";
}else {
    echo "提交失败";
}
?>