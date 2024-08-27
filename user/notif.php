<?php
include'../db.php';
$sql=mysqli_query($con,"select * from bookagency where uid=".$_SESSION['user']['uid']);
$data=mysqli_fetch_array($sql);
$n1=mysqli_num_rows($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Waste Collection Portal - index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.7.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span style="color:green">Ewaste</span> Portal</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

     <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="Userhome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="userprofile.php">Myprofile</a></li>
          <li><a class="nav-link scrollto" href="Searchagency.php">Search Agency</a></li>
          <li><a class="nav-link scrollto" href="viewplans.php">Plans</a></li>
          <li><a class="nav-link scrollto" href="viewallagency.php">All Agencies</a></li>
          <li><a href="mybookings.php">MyBookings</a></li>
          <li class="dropdown"><a href="#"><span>Messages</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="notif.php">Notifications</a></li>
           
              <li><a href="fandr.php">Feedback</a></li>
              <li><a href="adreply.php">Admin Reply</a></li>
             
             
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
    
 <!-- End Hero Section -->
<br><br><br><br><br><br>
  <main id="main">

    <!-- ======= About Section ======= -->
<center>

 




<?php 
if($n1>=1)
{


?>

 
<p style="color:green"><span><font size="6">Your Booking Request Status is<p style="color:red">..<?php echo $data["status"];?>..</p></span> </p></font>
<?php

if($data["status"]=='Accepted')
{


?><span style="color:black"><a href="payment.php?id=<?php echo $data["bookid"];?>"><font size="6">click here</font></a></span>


<?php
}
else
{
  ?>
<span style="color:pink">Your Request is in Pending...</span>
  <?php 
}
}
else
{
  echo "<script>alert('Booking details Not Available...!');</script>";
}
?>

    
</center>





   <!-- End About Section -->

    <!-- ======= Services Section ======= -->
   <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
   <!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    
     
     <!-- End #main -->
  <br><br>
<?php
include'footer.php';
?>
  <!-- ======= Footer ======= -->
