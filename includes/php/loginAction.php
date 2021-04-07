<?php
include "con_db.php";

$_GET["user_name"];
$email = $_GET["user_name"].'@mahgoubsons.com';
session_start();
session_regenerate_id();

if (isset($_GET["user_name"])) { 

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $run_query = mysqli_query($con,$sql);
  $count = mysqli_num_rows($run_query);

   if($count == 1){
    $row = mysqli_fetch_array($run_query);
    $_SESSION["uid"] = $row["id"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["job_title"] = $row["job_title"];
    $_SESSION["permission"] = $row["permission"];
    $_SESSION["division"] = $row["division"];
    $_SESSION["login_token"] = $row["login_token"];

    //setcookie('user_id',$row["id"],time() + 86400);
    setcookie("username", $row["id"], time() + 86400);

    if (($row["login_token"] == 1) && ($_COOKIE["user_id"] == $row["id"])) {
      header("location:../../dist");
    }

    if (($row["login_token"] == 1) && empty($_COOKIE["user_id"])) {
      header("location:../../dist/doubleLogin.php");
    }


    if (($row["login_token"] == 0)) {
       $sql2 = "UPDATE users set login_token = 1 WHERE email = '$email'";
      $run_query = mysqli_query($con,$sql2);
      header("location:../../dist");
    }

 }else{
  echo "<script>alert('Worng Email Or Password');</script>";
 }
  }


  /*
       
      */
?>
