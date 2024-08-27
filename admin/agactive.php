<?php 
include '../db.php';
$id=$_GET["id"];
$sql=mysqli_query($con,"update agentreg set status='Activated' where id='$id'");
header("location:viewagency.php")

 ?>