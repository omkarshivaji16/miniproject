  <?php
include '../db.php'; 
if(isset($_POST["submit"]))
{



  $name=$_POST["name"];
  $filename=$_FILES['image']['name'];
$f=$_FILES['image']['tmp_name'];
$path="image/";
$filepath=$path.$filename;
move_uploaded_file($f, $filepath);
  $field=$_POST["field"];
  $c=$_POST["a"];
  $s=$_POST["y"];
  $address=$_POST["address"];
  $phoneno=$_POST["phoneno"];
  $email=$_POST["email"];
  $username=$_POST["username"];
  $password=$_POST["password"];
  
  $query=mysqli_query($con,"insert into addcelebrity(name,image,field,inter,yr,address,phoneno,email,username,password) values('$name','$filepath','$field','$c','$s','$address','$phoneno','$email','$username','$password')");
  echo'<script>alert("RECORD INSERTED SUCCESSFULLY")</script>';

}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>GetMyTime/Admin</title>
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
                <h1><a href="home.php">GETMYTIME</a></h1>
              </div>

              
             <div class="clearfix"> </div>  
        </div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Add Celebrity</li>
            </ol>


<div class="grid-form1">
 
<h3> REGISTRATION</h3> 

  <div class="tab-content">
  <div class="tab-pane active" id="horizontal-form" >
          
<center>                        
             
                   <table>
                    <form action="" method="POST" enctype="multipart/form-data" >
       <tr><td>NAME:</td><td><input  type="text" name="name" id="name" required placeholder="Enter your name"></td><td>IMAGE:</td><td><input type="file" name="image"/></td></tr>
      <tr><td>CATEGORY:</td><td>
                     <select name="field" id="field">
                      <option value="">--SELECT--</option>
                       <?php
                       $records= mysqli_query($con,"select * from addcategory");
                       while($data=mysqli_fetch_array($records))
                       {
                       ?>
                      <option value=<?php echo $data['categoryname'];?>><?php echo $data['categoryname'];?></option>
                      <?php
                    }
                    ?>
                      
                     </select>
                   </td></tr>
      <tr><td>AREA OF INTEREST:</td><td><input type="text" name="a" required></td></tr>    <tr><td>YEAR OF EXP:</td><td><input type="text" name="y" required></td></tr>     
       <tr><td>ADDRESS:</td><td><textarea name="address" id="address" placeholder="Enter your Address" required></textarea></td></tr>
        <tr><td>PHONENO:</td><td><input type="tel" name="phoneno" maxlength="10" id="phoneno" placeholder="Enter your Phoneno" required></td></tr>
       <tr><td>EMAILID:</td><td><input type="text" id="email" name="email" placeholder="Enter your email" required></td></tr>
       <tr><td>USERNAME:</td><td><input type="text" id="username" name="username" placeholder="Enter Username" required></td></tr>
        <tr><td>PASSWORD:</td><td><input type="password" maxlength="6" id="password" name="password" placeholder="Enter your password" required></td></tr>
       <tr><td colspan="2" align="center" style="color:red"> <input type="submit" name="submit" value="SUBMIT"/> </td></tr>
   
                 
              </form>
               </table>
        </center>
         
                     
      </div>
          </div>



</div>



<div style="margin-left: 320px;">
<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
      <h2>View Celebrity Details</h2>
                                          
                                          <table id="table">
            <thead>
              <tr>
              <th>Id</th>
              <th>NAME</th>
              <th>IMAGE</th>
              <th>FIELD/AREA</th>
              <th>INTERESTEDAREA</th>
              <th>YEOXP</th>
              <th>ADDRESS</th>
              <th>PHONENO</th>
              
                                                        <th>EMAIL</th>
                                                        <th>USERNAME</th>
                                                        <th>PASSWORD</th>
                                                        
                                                        <th colspan="2">Actions</th>
                                                        
                                                        
              </tr>



            </thead>
            <tbody>
                <?php

                                          $qur=  mysqli_query($con,"select * from addcelebrity order by cid");
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qur))
                                                  {
                                                  ?>
                                                    <tr>
                                                         
                                                        <td><?php echo $i;?></td>
                                                         <td><?php echo $r['name'];?></td>
                                                         <td><img src="<?php echo $r['image'];?>" width="80" height="80" /></td>
                                                          <td><?php echo $r['field'];?></td>
                                                          <td><?php echo $r['inter'];?></td>
                                                          <td><?php echo $r['yr'];?></td>
                                                           <td><?php echo $r['address'];?></td>
                                                            <td><?php echo $r['phoneno'];?></td>
                                                           <td><?php echo $r['email'];?></td>
                                                           <td><?php echo $r['username'];?></td>
                                                           <td><?php echo $r['password'];?></td>
                                                            
                                                         
                                                    <td>EDIT</td>
                                                    <td>DELETE</td>    
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
                                                   }
                                                    ?>
               
             
                                           </tbody>  
                                                
            </table>
          
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
   <p>© 2022 Infotech . All Rights Reserved | Design by  <a href="http://infodawn.com/" target="_blank">GetMyTime</a> </p>
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
