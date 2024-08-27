<?php
include '../db.php'; 
$id=$_GET['id'];
$q=mysqli_query($con,"delete from userreg where uid='$id'");
echo '<script>alert("RECORD DELETED SUCCESS FULLY");window.location.href="viewusers.php";</script>';

?>
