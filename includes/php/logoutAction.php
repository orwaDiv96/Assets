<?php
include "con_db.php"; 
session_start();

$email = $_SESSION["email"];

$sql = "UPDATE users set login_token = 0 WHERE email = '$email'";
$run_query = mysqli_query($con,$sql);

//$_SESSION["uid"] = "";
unset($_COOKIE['username']);
setcookie('username','', time() - 86400); // empty value and old timestamp
// setcookie('user_id','',time() + 86400);

session_unset();
session_destroy();

header("location:../../");
?>

