<!DOCTYPE html>
<?php 

 ?>
<html lang="en">
    <head>
      <?php include 'headerLogo.php'; ?> 
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Chrome" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />

<title>MSG Assets | Double Login</title>

<link href="css/styles.css" rel="stylesheet" />


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

    #unautho{
      margin-top: 15%;
    }

   </style>
</head>
    <body class="sb-nav-fixed">

        <div class="container-fluid"> 
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <br>
                            <div id="unautho">
                              <center style="color: red;"><h2>Double Login</h2></center>
                              <center><h2>You are Logged in from two Different Devices</h2></center>
                              <center><a href="../includes/php/logoutAction.php"><h5>Clicked here to logout From Other Devices/Browsers</h5></a></center>
                            </div>
                    </div>
                    </main>
                    </div>
                    </div>                     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </body>
</html>
