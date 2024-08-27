<?php
include'../db.php';
$id=$_SESSION['agent']['id'];
$p=mysqli_query($con,"select * from agentreg where id=".$_SESSION['agent']['id']);
$data=mysqli_fetch_array($p);
if(isset($_POST["sent"]))
{

  $n=$_POST["n"];
  $d=$_POST["ad"];
  $e=$_POST["pn"];
  $f=$_POST["lc"];
  $g=$_POST["em"];
  $ds=$_POST["un"];
  $p=$_POST["pw"];
  $qr=mysqli_query($con,"update agentreg set name='$n',address='$d',phoneno='$e',location='$f',email='$g',username='$ds',password='$p' where id='$id'");
  echo'<script>alert("UPDATED THE RECORD")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Waste Collection Portal - Agency</title>
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
          <li><a class="nav-link scrollto active" href="Agenthome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="agProfile.php">Myprofile</a></li>
          <li><a class="nav-link scrollto" href="userbook.php">Requests</a></li>
          <li><a class="nav-link scrollto" href="pay.php">Payment</a></li>
          <li><a class="nav-link scrollto" href="addreport.php">Report</a></li>
       
          <li><a href="cmp.php">Complaint</a></li>
          <li><a href="rep.php">Admin Reply</a></li>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
    <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/agt.jpg)">
            <div class="carousel-container">
              <center>
              <h4 style="color:white">MY PROFILE</h4>
              <form action="" method="POST">
              <table>
                <tr><td style="color:white">NAME</td><td><input type="text" name="n" value="<?php echo $data['name'];?>"></td></tr>
                 <tr><td style="color:white">ADDRESS</td><td><textarea name="ad"><?php echo $data['address'];?></textarea></td></tr>
                  <tr><td style="color:white">PHONENO</td><td><input type="text" name="pn" value="<?php echo $data['phoneno'];?>"></td></tr>
                  <tr><td style="color:white">LOCATION</td><td><input type="text" name="lc" value="<?php echo $data['location'];?>"></td></tr>
                   <tr><td style="color:white">EMAILID</td><td><input type="email" name="em" value="<?php echo $data['email'];?>"></td></tr>
                    <tr><td style="color:white">USERNAME</td><td><input type="text" name="un" value="<?php echo $data['username'];?>"></td></tr>
                     <tr><td style="color:white">PASSWORD</td><td><input type="password" name="pw" value="<?php echo $data['password'];?>"></td></tr>
              </table>
              <input type="submit" name="sent" value="UPDATE">
            </form>
</center>

            </div>
          </div>

          
         

        </div>

        

      </div>
    </div>
  </section>
 <!-- End Hero Section -->
<br>
  <main id="main">

    <!-- ======= About Section ======= -->
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
