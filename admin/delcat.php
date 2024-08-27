<?php
include '../db.php'; 
$id=$_GET['id'];
$q=mysqli_query($con,"delete from addcategory where catid='$id'");
echo '<script>alert("RECORD DELETED SUCCESS FULLY");window.location.href="addcategory.php";</script>';

?>
