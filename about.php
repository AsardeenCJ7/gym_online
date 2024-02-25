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
    <title>Gym Management System</title>
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
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </section>


    <!-- About Us Section -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="section-title text-center">
                <img src="img/icons/logo-icon.png" alt="">
                <h2>About Fitness Fusion Hub</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <p>Welcome to Fitness Fusion Hub, located in the serene Ambara district of Sri Lanka! We are not
                        just a gym; we are your dedicated partners on the journey to a healthier and happier life. At
                        Fitness Fusion Hub, our focus is on providing specialized services in yoga, fitness training,
                        weight loss programs, and professional trainer guidance. We also offer medical services to
                        ensure a holistic approach to your well-being.</p>

                    <p>Our team consists of passionate individuals committed to your fitness goals. From experienced
                        trainers to qualified medical professionals, we are here to support you every step of the way.
                        Embrace a lifestyle of wellness with our tailored programs designed to cater to your unique
                        needs.</p>

                    <p>Step into Fitness Fusion Hub and experience a fusion of fitness, health, and tranquility. Let us
                        guide you on a path to a balanced and vibrant life. Your journey to a healthier you begins here!
                    </p>
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