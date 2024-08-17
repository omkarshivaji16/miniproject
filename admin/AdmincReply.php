<?php
include '../db.php';

$fid=$_GET['id'];
if($_POST)
{
 if($_POST["reply"]!='') 
     {
      
     
   $sql=  mysqli_query($con,"update addcomplaint set reply= '".$_POST['reply']."' where fid='$fid'" );
    
header("location:viewfd.php");
}
}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-waste Collection Portal/Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
    
</script>
<style type="text/css">
    .logo1 {
    width: 100%;
    padding: 15px 14px 15px;
    box-sizing: border-box;
    background: #EA3621;
    text-align: center;
}
</style>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
        <div class="header-main">
         <div class="logo-w3-agile" style="background:black;width: 500px;">
                <h1><a href="home.php">E-waste Portal</a></h1>
              </div>

              
             <div class="clearfix"> </div>  
        </div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i></li>
            </ol>


<div class="grid-form1">
 
<h3> FEEDBACK REPLY</h3> 

  <div class="tab-content">
  <div class="tab-pane active" id="horizontal-form" >
          
            <center> 
                     <form action="" method="POST">
                 
           
        <tr><td>REPLIES:</td><td><textarea name="reply" id="reply"  required></textarea></td></tr><br>
        
       
     
       <tr><td align="center" colspan="2" ><input type="submit" style="color:red" name="submit" value="SUBMIT"/></td></tr>
                        </form>
      
                    
      
                     
        </center> 



         
                     
      </div>
          </div>



</div>



<div style="margin-left: 320px;">
<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
      <h2></h2>
                  
          
    </div>


    
    
    
    



<!-- script-for sticky-nav -->
    <script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
          $(".header-main").addClass("fixed");
        }else{
          $(".header-main").removeClass("fixed");
        }
       });
       
    });
    </script>
    <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
</br>
<div class="copyrights" style="margin-left: -320px;">
   <p>© 2022 Infotech . All Rights Reserved | Design by  <a href="http://infodawn.com/" target="_blank">EwasteCollectionPortal</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
    <!--/sidebar-menu-->
       <?php 

     if(isset($_SESSION['admin']))
     {
  
       }
       ?>
       <?php
       include'sidebar.php';

       ?>
                <div class="clearfix"></div>    
              </div>
              <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->     

</body>
</html>
