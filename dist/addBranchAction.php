     <?php include "con_db.php";

     if (isset($_POST['branch'])) {
       $branch = $_POST['branch'];
       $branch_code = $_POST['branch_code'];


    $query = "INSERT INTO branches VALUES (NULL,'$branch','$branch_code')";
    $insert_branch = mysqli_query($con,$query);

    if($insert_branch){

        echo "<div id='msg' classs='alert alert-success'>Device Added Successfully</div>";
    }
     }



     ?>
