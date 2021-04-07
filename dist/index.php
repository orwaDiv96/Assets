<!DOCTYPE html>
<?php 

session_start();
include("con_db.php");
$user_id = $_SESSION["uid"];

  $sql = "SELECT * FROM users WHERE id = '$user_id'";
  $run_query = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($run_query);

  if ($row['login_token'] == 0) {
    unset($_COOKIE['username']);
    setcookie('username','', time() - 86400); // empty value and old timestamp
    session_unset();
    session_destroy();
    header("location:../");
  }

$permission = $_SESSION["permission"];
if(empty($_SESSION["uid"])){
  header("location:../");
}

 ?>
<html lang="en">
    <head>
  <?php include 'headerLogo.php'; ?> 

        <!-- <link rel="shortcut icon" href="pics/msg.png" style="width: 100%; " type="image/png"> -->

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Chrome" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MSG Assets</title>


        <link href="css/styles.css" rel="stylesheet" />
        <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>

        
       <?php include "JQuery.php"; ?>
       <style type="text/css">
           

           .navbar-brand {
  width:150px;
  font-size: 24px;
}
.navbar-brand img {
  height: 50px;
  /* put value of image height as your need */
  float: left;
  margin-right: 7px;
}

       </style>
    </head>
    <body class="sb-nav-fixed">
        <?php include "navbars.php" ?>

                                <!-- <button id="gfd">Click</button> -->
                        <div id="welcomeDIV">
                          <?php include 'assetsStatistics.php'; ?>
                         </div>                            

                             <br>
                            <div id="userControlPanel"></div>
                            <div id="assetsDivInfo"></div>
                                    <!-- <div id="addAssetFormDiv"></div> -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
<!--         <script src="assets/demo/datatables-demo.js"></script>
 -->        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        

    </body>
</html>
