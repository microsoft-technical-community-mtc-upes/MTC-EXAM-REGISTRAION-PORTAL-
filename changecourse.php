<?php
include("connection.php");
$mtcunique = $_POST['adid'];
$course = $_POST['course'];
$allInfo = "UPDATE registerdusers SET course='$course' WHERE random='$mtcunique'";
if(mysqli_query($conn,$allInfo))
{
   echo "<script>alert('Corse Updated');window.location ='index.html';</script>";
}
else
{
    echo "Error Created" . mysqli_error($conn);
}
?>

