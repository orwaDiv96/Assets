<?php 
include 'con_db.php';

$table_name = 'alnileen_assets';

for ($i=134; $i < 257 ; $i++) { 
	$query = "DELETE FROM $table_name WHERE id = '$i'";
    $result = mysqli_query($con,$query);
}


   if ($result) {
   	echo 'Done !';
   } 

?>