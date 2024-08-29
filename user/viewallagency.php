<?php

include'../db.php';

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
<style>


    
table th {
    background:#9e9e9e;
    color:#212529;
    padding: 10px 10px;
    text-transform: uppercase;
}
table th, table td {
    padding: 10px 12px;
    text-align: left;
      padding: 10px 10px;

}

  


</style>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/ss.webp)">
            <div class="carousel-container">
  <!-- ======= hero Section ======= -->
    <br><br><br><br><br>
              <center>
  <div style="margin-left: 320px;">
<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
      <h2>AGENCY LISTS</h2>
                                          
                                          <table id="table">
            <thead>
              <tr>
            
              <th>NAME</th>
              <th>ADDRESS</th>
          
              <th>LOCATION</th>
              
                                                        <th>AGENTNAME</th>
                                              
                                                        <th>CATEGORY</th>
                                                        <th>EMAIL</th>
                                                        <th>ACTION</th>
                                                       
                                                        
                                                        
              </tr>



            </thead>
            <tbody>
              <?php

      

                                                  $qr="select  * from agentreg  order by id asc";
                                                  $qrr=  mysqli_query($con,$qr);
                                                   $num=mysqli_num_rows($qrr);
                                                  if($num>0)
                                                  {
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                  ?>

<tr>
  <td style="color:white"><?php echo $r['name'];?></td>
     <td  style="color:white"><?php echo $r['address'];?></td>   
   
     <td  style="color:white"><?php echo $r['location'];?></td>
     <td  style="color:white"><?php echo $r['agenname'];?></td>
        <td  style="color:white"><?php echo $r['catname'];?></td> 
        <td  style="color:white"><?php echo $r['email'];?></td>     
                
            
                         <td> <a class="btn btn-primary" href="bookagency.php?id=<?php echo $r["id"];?>" style="color:black">SENT REQUEST</a></td>
                       </tr>
                     </tbody>

            
           <?php
                                                 
                                                  $i++;
                                                   }
                                                   }else
                                                   {
                                                   
                                                  
                                                    ?>

                                                <td style="color:white" colspan="8" align="center" >##NO DATA AVAILABLE##</td>
               
                                                  <?php
                                                  }

                                                ?>


             
                                           </tbody>  
                                                
            </table>
          
    </div>


    

</div>
</center>
</div>
</div>
</div>





</center>



            
          </div>

          
         

        </div>

       </section> 

      
 <!-- End Hero Section -->
<br><br><br><br>
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
