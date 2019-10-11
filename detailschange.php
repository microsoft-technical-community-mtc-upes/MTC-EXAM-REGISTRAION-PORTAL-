<?php
session_start();
include("connection.php");
$mtcunique = $_POST['mtcunique'];
$uniqueid=$_SESSION['$mtcunique'];
 
if(($counterp==0) && ($countera==0))
{
   echo "<script>alert('Welcome Admin');window.location ='admincharge.html';</script>";
}
else
{
   echo "<script>alert('Wrong Id and Password Try Again');window.location ='admin.html';</script>";
}
?>

