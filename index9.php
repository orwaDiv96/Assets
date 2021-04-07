
<!DOCTYPE html>
<html>
<?php  
session_start(); 
ini_set('display_errors',0);

 ?>

<head>
  <!-- <link rel="shortcut icon" href="pics/msg.png" style="width: 100%; " type="image/png"> -->
 <link rel="shortcut icon" href="includes/pics/logo.png" style="width: 100%; " type="image/png"> 

    <title>Home</title>
    <meta charset="UTF-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style type="text/css">

 body{
    background-image: url("includes/pics/login-background.png");
    background-size: cover;
    background-attachment: fixed;
    color: #fff;
  }
    .form-style{
    z-index: 1;
  }
  .body-cover{
    width: 100% ; 
    height: 100%; 
    position: absolute;
    background: rgba(0,0,0, 0.4);
    z-index: -2;
  }

  .form-style{
    width: 30% ; 
    height: 65%; 
    margin-top: 8%;
    background: rgba(255,255,255, 0.3);
    margin-left: 60.5%;
    border-radius: 10px;
    position: absolute;
    z-index: -1;
    font-family: arial;
  }


  .btn-primary-adjust{
    background-color: #114F89;
    color: #FFF;
  }

.btn-primary-adjust:hover{
  /*background-color: #1E90FF;*/
  color: #FFF;
}
.divider{
position: absolute;
height: 0.3%;
background-color: #333333;
}

.logo{
position: absolute;
}


</style>
</head>
<body class="body_style">
  <div class="body-cover">
<div class="container">
<!-- <div class="logo">
  <img  src="includes/pics/logo.png" style="width: 100%; margin-top: 70%;margin-bottom: 10%;">
</div> -->
  <!-- <h1 style="text-align: center;">Login</h1> -->
</div>
  <div class="form-style">

<form name="login" class="col-xs-10 col-xs-offset-1" method="post" style="margin-top: 10%;text-align:center;">

<div class="form-group">
  <div>
    <img  src="includes/pics/logo.png" style="width: 30%; margin-top: 1%;margin-bottom: 1%;">
  </div>
  <h1 style="text-align: center;">Login</h1> 
</div> 


<div class="input-group ">

  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" name="userLogin" placeholder="FirstName.LastName" required="true"  class="form-control">
</div><br>

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
  <input type="password" name="userPassword" required="true" placeholder="Enter Your Password"  class="form-control">
</div><br>
<br>
<div class="input-group col-xs-12">
  <button type="submit" value="Login" name="submit" style="font-size: 22px; height: 20%;" class="btn btn-primary-adjust col-xs-12 ">Login</button>
  <br>
</div>

<?php

if(isset($_POST['submit']))
{
  //echo "Clicked !";
$new = new LDAP;

$new -> ldap_auth($_POST['userLogin'] , $_POST['userPassword']) ;
$_SESSION['userPassword']  =$_POST['userPassword'];
$_SESSION['userLogin']  =$_POST['userLogin'];

$username =$_POST['userLogin'] ; 
$userPassword =$_POST['userPassword'] ; 
}

class LDAP{
	
	//const LDAP_SERVER_V ="192.168.0.35"; //Active Directory Server IP
  const LDAP_SERVER_V ="192.168.0.1"; //Active Directory Server IP
	const LDAP_DOMAIN_V = "@mahgoubsons.com"; //User Sufix (You can remove it and let the user insert the whole email)
	
	public function ldap_auth($user,$pass){ //Returns true if user/password is correct in Active Directory
		
		//vars
		$ldap_user=$user;
		$ldap_pass=$pass;
		
		 $_SESSION['ldap_pass']= $ldap_pass ;
		//Create Connection
		$ldap_conn = ldap_connect(LDAP::LDAP_SERVER_V);
	//	if ($ldap_conn) {
      //echo 'Connected ! <br>';
   // }
		//Connect and return true or false
		//$ldap_bind = @ldap_bind($ldap_conn,$ldap_user/*user@example.com*/,$ldap_pass);
    $ldap_bind = @ldap_bind($ldap_conn,$ldap_user.LDAP::LDAP_DOMAIN_V/*user@example.com*/,$ldap_pass);
		//echo 'here we go'.$ldap_bind ;
		if($ldap_bind) 
		{
      //echo "logged in !";
			$_SESSION['userLogin'] = $_POST['userLogin']; 
$result = mysqli_query($con,"SELECT * FROM users where email ='".$_POST['userLogin']."'");
	header('location:includes/php/loginAction.php?user_name='.$_POST['userLogin']);	
		//echo 'successfully logged in';
		return true;
	  }else{ 
          print'<script type="text/javascript">alert("Invaild Username or Password")</script>'.$ldap_bind ;

		// echo 'Failed !';
		return false;
		
	}
}
}

?>
  </form>
</div></center>

  <!-- <script src='/assets/libs/fullpage/jquery.js'></script> -->
</div>

</div>

</body>

</html>