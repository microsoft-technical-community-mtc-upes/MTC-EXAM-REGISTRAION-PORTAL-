<?php
session_start();
include("connection.php");
$adminid = $_POST['adid'];
$password = $_POST['pass'];
$admin="MTCRISHABH";
$adminpassword="qwerty12345";
$counterp=strcmp($password,$adminpassword);
$countera=strcmp($adminid,$admin); 
if(($counterp==0) && ($countera==0))
{
   echo "<script>alert('Welcome Admin');window.location ='detailschange.html';</script>";
}
else
{
   echo "<script>alert('Wrong Id and Password Try Again');window.location ='admin.html';</script>";
}
?>

