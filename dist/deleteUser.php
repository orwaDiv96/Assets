<?php 
include 'con_db.php';
if (isset($_GET['uID'])) {
$uID = $_GET['uID'];

       $query = "DELETE FROM users WHERE id = '$uID'";
    $result = mysqli_query($con,$query);

   if ($result) {
   	echo '<script> 
   			alert("User Removed Succssfully !");
   			    window.location.href="index.php";
   		  </script>';
   }
}
?>