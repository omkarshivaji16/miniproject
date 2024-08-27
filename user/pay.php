<?php
include'../db.php';

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

    <style>
table th {
    background: #8bc34a;
    color: black;
    padding: 15px 15px;
    text-transform: uppercase;
}
table th, table td {
    padding: 10px 12px;
    text-align: left;
      padding: 10px 10px;
}

  </style>
  <!-- ======= hero Section ======= -->
    <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/agt.jpg)">
            <div class="carousel-container">
              
 <center><h1 style="color:white">PAYMENT DETAILS</h1>
          <div style="margin-left:320px;">
  <div class="w3-table-info" style="margin-left:-320px;overflow-x:auto; ">                 
                    
      <table id="table"  width="100%" border="1">
            <tr>
              
          
           
           <th>PAYID</th>
           <th>NAME</th>
           <th>EMAIL</th>
           
           <th>AMOUNT</th>
           <th>PAYEMENT DATE</th>
           
        
            </tr>
            
            <?php
             $query1=  mysqli_query($con,"select  * from payment  order by payid asc");
            $num= mysqli_num_rows($query1);
            if($num>0)
            {
            while($r=mysqli_fetch_array($query1))
            {
            
            ?>
            <tr>
             
               
             
              
              
               <td style="color:white"><?php echo $r['payid'];?></td>
               <td style="color:white"><?php echo $r['name'];?></td>
               <td style="color:white"><?php echo $r['email'];?></td>
               
                  <td style="color:white"><?php echo $r['amount'];?></td>
             <td style="color:white"><?php echo $r['paydate'];?></td>

          
              
              
            </tr>
            <?php
            }  
            }
            else
            {
                
                ?>
            <tr>
                <td style="color:white" colspan="9" >
                  <center>  ##NO DATA AVAIALBLE##</center>
                </td>
        </tr>
           <?php   
            }
            ?>
            
            
        </table>
                        
                     
         </center> 
                           
          </div>
        </div>





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
