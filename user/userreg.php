<?php
include'../db.php';
if(isset($_POST["sent"]))
{
$x=$_POST["n"];
$s=$_POST["ad"];
$q=$_POST["pn"];
$r=$_POST["lc"];
$tr=$_POST["em"];
$ys=$_POST["un"];
$us=$_POST["pw"];
$qwrs=mysqli_query($con,"insert into userreg(name,address,phoneno,location,email,username,password) values('$x','$s','$q','$r','$tr','$ys','$us')");
echo'<script>alert("Registration Successfully")</script>';
}
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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php">Services</a></li>
          <li><a class="nav-link scrollto" href="index.php">Portfolio</a></li>
         
          <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="agreg.php">AGENCY REGISTRATION</a></li>
             
              <li><a href="userreg.php">USER  REGISTRATION</a></li>
             
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
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

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/ut.jpg)">
            <div class="carousel-container">
              <center>
              <h4 style="color:white">Register here!!</h4>
              <form action="" method="POST" name="fname">
              <table>
                <tr><td style="color:white">NAME</td><td><input type="text" name="n" required=""></td></tr>
                 <tr><td style="color:white">ADDRESS</td><td><textarea name="ad" required=""></textarea></td></tr>
                  <tr><td style="color:white">PHONENO</td><td><input type="number" maxlength="10" onchange="validate()" name="pn" required=""></td></tr>
                  <script>
                      function validate()
                      {
                          
                          var val=document.fname.pn.value;
                         
                          if(val.length < 10)
                          {
                              
                              alert('Phone number Must have 10 digit');
                              return;
                          }
                      }
                              
                              
                              
                              
                              </script>
                  <tr><td style="color:white">LOCATION</td><td><input type="text" name="lc" required=""></td></tr>
                   <tr><td style="color:white">EMAILID</td><td><input type="email" name="em" required=""></td></tr>
                    <tr><td style="color:white">USERNAME</td><td><input type="text" name="un" required=""></td></tr>
                     <tr><td style="color:white">PASSWORD</td><td><input type="password" name="pw" required=""></td></tr>
              </table>
              <input type="submit" name="sent" value="REGISTER">
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
    <!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
<!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
 <!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
   <!-- End Contact Section -->

  </main><!-- End #main -->
  <br><br>
<?php
include'footer.php';
?>
  <!-- ======= Footer ======= -->
