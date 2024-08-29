<?php 
include '../db.php';
$bookid=$_GET["id"];
$sql=mysqli_query($con,"update bookagency set status='Rejected' where bookid='$bookid'");
header("location:userbook.php")

 ?>