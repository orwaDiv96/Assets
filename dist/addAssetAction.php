     <?php include "con_db.php";

     if (isset($_POST['company'])) {
      
       
       $company = $_POST['company'];
       if ($company == 'ARECO') {
         $company = 'Almergania';
       }
              
       $branch = $_POST['branch'];
       $device_type = $_POST['device_type'];
       $device_name = $_POST['device_name'];
       $serial_number = $_POST['serial_number'];
       $assigned_to = $_POST['assigned_to'];
       $job_title = $_POST['job_title'];
       $status = $_POST['status'];
       $remarks = $_POST['remarks'];
       if (empty($remarks)) {
         $remarks = 'N/A';
       }
       
       $assest_code = $_POST['assest_code'];

    $query = "INSERT INTO company_assets VALUES (NULL,'$company','$device_type','$device_name','$serial_number','$assigned_to','$job_title','$status','$branch','$assest_code','$remarks')";
    $insert_branch = mysqli_query($con,$query);

    if($insert_branch){

        echo "<div id='msg' classs='alert alert-success'>Device Added Successfully</div>";
    }
     }



     ?>
