<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>FFH Fitness Management System</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ahana Yoga HTML Template">
    <meta name="keywords" content="yoga, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">



</head>

<body>
    <!-- Page Preloder -->


    <!-- Header Section -->
    <?php include 'include/header.php';?>
    <!-- Header Section end -->




    <!-- Page top Section -->
    <section class="page-top-section set-bg" data-setbg="./img/slider/home_banner.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-white">
                    <h2>Contact US</h2>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section class="contact-section spad">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-sm-6">
                    <p><strong>Email:</strong> info@fitnessfusionhub.com</p>
                    <p><strong>Contact No:</strong> +94 761234567</p>
                    <p><strong>Address:</strong> Fitness Fusion Hub, Ambara District, Sri Lanka</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>
    <!-- Footer Section end -->

    <div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

    <!-- Search model end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>