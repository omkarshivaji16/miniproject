<?php
include '../db.php'; 
$id=$_GET['id'];
$q=mysqli_query($con,"delete from agentreg where id='$id'");
echo '<script>alert("RECORD DELETED SUCCESS FULLY");window.location.href="viewagency.php";</script>';

?>
