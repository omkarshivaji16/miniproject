<?php
include'../db.php';
$q=mysqli_query($con,"select * from bookagency where  uid=".$_SESSION['user']['uid']);
$data=mysqli_fetch_array($q);
if(isset($_POST["sent"]))
{

$name=$_POST["n"];
$email=$_POST["em"];
$ctype=$_POST["ctype"];
$cno=$_POST["cno"];
$cvv=$_POST["cvv"];
$cdate=$_POST["cdate"];
$am=$_POST["amt"];
$pdate=$_POST["pdate"];

$qs=mysqli_query($con,"insert into payment(name,email,ctype,cno,cvv,cdate,amount,paydate) values('$name','$email','$ctype','$cno','$cvv','$cdate','$am','$pdate')");
echo'<script>alert("PAYMENT SUCCESS!!OUR AGENT CAME THEIR and QUICKLY TO COLLECT YOUR WASTE")</script>';






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
          <li><a class="nav-link scrollto active" href="Userhome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="userprofile.php">Myprofile</a></li>
          <li><a class="nav-link scrollto" href="Searchagency.php">Search Agency</a></li>
          <li><a class="nav-link scrollto" href="viewplans.php">Plans</a></li>
          <li><a class="nav-link scrollto" href="viewallagency.php">All Agencies</a></li>
          <li><a href="mybookings.php">MyBookings</a></li>
          <li class="dropdown"><a href="#"><span>Messages</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="notif.php">Notifications</a></li>
             
              <li><a href="fandr.php">Feedback & Reply</a></li>
                <li><a href="candr.php">Complaint & Reply</a></li>
             
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
<br><br>
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
      <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>PAYMENT NOW</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <center>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <span class="saleon">Payement</span>
              <h3></h3>
              <form action="" method="POST">
              <table>
                <tr><td>NAME</td><td><input type="text" name="n" value="<?php echo $data['name'];?>" readonly></td></tr>
                   <tr><td>EMAILID</td><td><input type="email" name="em" value="<?php echo $data['email'];?>" readonly></td></tr>
                    <tr><td>CARDTYPE</td><td><input type="radio" name="ctype" value="master">MASTER<input type="radio" name="ctype" value="Visa">VISA</td></tr>
                    <tr><td>CARDNO</td><td><input type="number" name="cno" onkeypress="if(this.value.length==16) return false;" required=""></td></tr>
                    <tr><td>CVV</td><td><input type="number" name="cvv"  onkeypress="if(this.value.length==3) return false;" required=""></td></tr>
                    <tr><td>ExpDate</td><td><input type="text" name="cdate" required="" placeholder="mm/yyyy"></td></tr>
                    <tr><td>AMOUNT</td><td><input type="text" name="amt" value="<?php echo $data['amount'];?>" readonly></td></tr>
                  <tr><td>PAYMENTDATE</td><td><input type="date" name="pdate" required=""></td></tr>
                     
              </table>
              <input type="submit" name="sent" value="PAYED">
            </form>
            </div>
          </div>
         </center>
        </div>
      </div>
    </div>
     
     <!-- End #main -->
  <br><br>
<?php
include'footer.php';
?>
  <!-- ======= Footer ======= -->
