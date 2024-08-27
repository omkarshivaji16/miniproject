<?php
include'../db.php';
if(isset($_POST["login"]))
{
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
  $query= "SELECT * from agentreg  where status='Activated' AND username= '$username' AND password= '$password'";
    
   $result=  mysqli_query($con, $query);
   if($result){ 
  $query_num=  mysqli_num_rows($result);
      if($query_num!=0)
      {
           $r1=  mysqli_fetch_array($result);
          $_SESSION['agent']=$r1;
          header("location:Agenthome.php");
      }
  
  else{

    $query1="SELECT * from userreg where status='Activated' AND username='$username' AND password='$password'";
    $result1=mysqli_query($con,$query1);
    if($result1)
    {
      $query_num1=mysqli_num_rows($result1);
      if($query_num1!=0)
      {
        $r2=mysqli_fetch_array($result1);
        $_SESSION['user']=$r2;
        header("location:Userhome.php");
      }
    }
    else{
      
      echo '<script>alert("invalid username and password");</script>';
    }
  }
   
   }
    
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
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          
          <li class="dropdown"><a href="#"><span>Registration</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="agreg.php">AGENCY REGISTRATION</a></li>
             
              <li><a href="userreg.php">USER  REGISTRATION</a></li>
             
            </ul>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <style>
    /*set border to the form*/
      
    
    /*assign full width inputs*/
      
    input[type=text],
    input[type=password] {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/
      
    button {
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 30%;
    }
    /* set a hover effect for the button*/
      
    button:hover {
        opacity: 0.8;
    }
    /*set extra style for the cancel button*/
      
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/
      
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/
      
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/
      
    .container {
        padding: 16px;
    }
    /*set the forgot password text*/
      
    span.psw {
        float: right;
        padding-top: 16px;
        
    }
    /*set styles for span and cancel button on small screens*/
      
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
    #menu li a {
        font-size: 18px;
        font-family: 'Roboto', sans-serif;
    }
    h1, h2, h3 {

    text-transform:  none;
  
}
</style>
  <!-- ======= hero Section ======= -->
    <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/tr.png)">
            <div class="carousel-container">
              <div class="container">
               
               <h2>Login Form</h2>
    <!--Step 1 : Adding HTML-->
    <form action="" method="POST">
            <input type="text" placeholder="Enter User Name" name="username" required><br/><br/>
  
           
            <input type="password" placeholder="Enter Password" name="password" required><br/><br/>
  
                <div align="center"><button type="submit" name="login">Login</button></div>
           
        
  
    </form>
              </div>
            </div>
          </div>

         


        </div>

        
        

      </div>
    </div>
  </section>
 <!-- End Hero Section -->
<br><br>
  <main id="main">

    <!-- ======= About Section ======= -->
   <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About eBusiness</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/ew6.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">project Maintenance</h4>
                </a>
                <p>
                  Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Interior design Package
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Building House
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Reparing of Residentail Roof
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Renovaion of Commercial Office
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Make Quality Products
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div>



   <!-- End About Section -->

    <!-- ======= Services Section ======= -->

    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>Expert Coder</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Creative Designer</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>Wordpress Developer</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>Social Marketer </h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Seo Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div>



   <!-- End Services Section -->

    <!-- ======= Team Section ======= -->
   <!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
 <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
         
        </div>

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Blue Sea</h4>
                      <span>Photosho</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div>
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

  </main>
<br><br>

<?php
include'footer.php';

?>