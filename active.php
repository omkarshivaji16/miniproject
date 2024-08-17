<?php 
include '../db.php';
$uid=$_GET["id"];
$sql=mysqli_query($con,"update userreg set status='Activated' where uid='$uid'");
header("location:viewusers.php")

 ?>