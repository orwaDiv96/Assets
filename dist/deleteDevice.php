<?php 
include 'con_db.php';
if (isset($_GET['dID'])) {
$dID = $_GET['dID'];

       $query = "DELETE FROM device_types WHERE id = '$dID'";
    $result = mysqli_query($con,$query);

   if ($result) {
   	echo '<script> 
   			alert("Device Deleted Succssfully !");
   			    window.location.href="index.php";
   		  </script>';
   }
}
?>