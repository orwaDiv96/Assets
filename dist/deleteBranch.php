<?php 
include 'con_db.php';
if (isset($_GET['bID'])) {
$bID = $_GET['bID'];

       $query = "DELETE FROM branches WHERE id = '$bID'";
    $result = mysqli_query($con,$query);

   if ($result) {
   	echo '<script> 
   			alert("Branch Deleted Succssfully !");
   			    window.location.href="index.php";
   		  </script>';
   }
}
?>