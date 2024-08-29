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

  <title>E-Waste Collection Portal - AGENCY</title>
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
<style>

select,input[type==submit]{
   width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;


}


</style>
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
    <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/tr.png)">
            <div class="carousel-container">
              <center>
                  <p style="color:white">In this site user can search agencies based on below appliances,<span style="color:blue">Major appliances</span> include washing machine,refrigerator,Cofeemaker etc .....<span style="color:blue">Minor Appliances</span> include vacuum cleaner,Ironbox,blenders etc</p>
  <form action="searchagent.php" method="POST">
      <table style="width:60%">
          <tr><td style="color:#3ec1d5"><font size="5">CHOOSE WASTE TYPE</font></td><td> <select name="category" id="category" class="form-control">
                      <option value="">SELECT</option>
                       <?php
                       $records= mysqli_query($con,"select distinct cname from addcategory");
                       while($data=mysqli_fetch_array($records))
                       {
                       ?>
                      <option value=<?php echo $data['cname'];?>><?php echo $data['cname'];?></option>
                      <?php
                    }
                    ?>
                     </select></td><td><input type="submit" name="search" style="color:#ed502e" value="SEARCH AGENCY"></td></tr>


</table><br><br><br>

      

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
