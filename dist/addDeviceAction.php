     <?php include "con_db.php";

     if (isset($_POST['device'])) {
       $device = $_POST['device'];


    $query = "INSERT INTO device_types VALUES (NULL,'$device')";
    $insert_device = mysqli_query($con,$query);

    if($insert_device){

        echo "<div id='msg' classs='alert alert-success'>Device Added Successfully</div>";
    }
     }



     ?>
