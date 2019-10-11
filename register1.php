<?php
include("connection.php");
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$college = $_POST['col'];
$sap="000000000";
$sap = $_POST['sap'];
$number = $_POST['number'];
$Address = $_POST['lastname'];
$City = $_POST['City'];
$course = $_POST['course'];
$examtaken = $_POST['examtaken'];
//random number
$random= rand(1, 999999);
$random_final1=rand($random,9999999);//for better number generation
$mtc="MTC";
$random_final = $mtc.$random_final1;
//------------
$temp=false;
$errMsg1=$errMsg2="";
if($temp==true)
{
  echo "<script> alert('$errMsg1$errMsg2');window.location='register.html'; </script>";
}
$allInfo = "INSERT INTO registerdusers(firstname,lastname,email,college,sap,number,address,city,course,examtaken,random) VALUES('$firstname','$lastname','$email','$college','$sap','$number','$Address','$City','$course','$examtaken','$random_final')";
if(mysqli_query($conn,$allInfo))
{
    echo "";
}
else
{
    echo "Error Created" . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Thank you for registering|UPES-MTC</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);</script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<style>
    body{
        background:white;
    }
    </style>
</head>
<body>
<!-- banner -->
    <div class="center-container">
        <div class="main">
            <h1 class="w3layouts_head">Thank You For Registration Your MTA Unique Id is <?php echo $random_final;?></h1><br>
            <h2 class="w3layouts_head">Please keep it safe for future endeavor</h2><br>
            <p>
                    <div class="buttons">
                    <a href="payment.html" target="_blank"><button class="slide">Payment</button></a>
                    </div>
            </p>
        <!-- Calendar -->
            <link rel="stylesheet" href="css/jquery-ui.css" />
                <script src="js/jquery-ui.js"></script>
                    <script>
                        $(function() {
                            $( "#datepicker" ).datepicker();
                        });
                    </script>
        <!-- //Calendar -->

        </div>
    </div>
<!-- //footer -->
</body>
</html>
