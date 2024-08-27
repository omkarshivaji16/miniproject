<?php 
include '../db.php';
$uid=$_GET["id"];
$sql=mysqli_query($con,"update userreg set status='Inactivated' where uid='$uid'");
header("location:viewusers.php")

 ?>