<?php
include("connection.php");
$mtcunique = $_POST['adid'];
$status = $_POST['paymentstatus'];
$allInfo = "UPDATE payments SET status='$status' WHERE uniqueid='$mtcunique'";
if(mysqli_query($conn,$allInfo))
{
   echo "<script>alert('Status Updated');window.location ='index.html';</script>";
}
else
{
    echo "Error Created" . mysqli_error($conn);
}
?>

