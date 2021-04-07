     <?php include "con_db.php";

     if (isset($_POST['UserName'])) {
       $UserName = $_POST['UserName'];
       $UserDivision = $_POST['UserDivision'];
       $UserJob = $_POST['UserJob'];
       $UserEmail = $_POST['UserEmail'];
       $UserPermission = $_POST['UserPermission'];
       $login_token = 0;


    $query = "INSERT INTO users VALUES (NULL,'$UserName','$UserDivision','$UserJob','$UserEmail','$UserPermission','$login_token')";
    $insert_branch = mysqli_query($con,$query);
     }



     ?>
