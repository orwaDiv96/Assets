<?php 
include 'con_db.php';

// $table_name = $_GET['tn'];
$asset_id = $_GET['asset_id'];

 //$result32 = mysqli_query($con,"SELECT * FROM $table_name WHERE id = '$asset_id'");
 //$row32 = mysqli_fetch_array($result32);   
// echo $table_name ;                  
 //echo $asset_id ;   


      $query = "DELETE FROM company_assets WHERE id = '$asset_id'";
    $result = mysqli_query($con,$query);

   if ($result) {
   	echo '<script> 
   			alert("Asset Deleted Succssfully !");
   			    window.location.href="index.php";
   		  </script>';
   }               
?>
