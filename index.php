<html>
<?php  
session_start(); 
ini_set('display_errors',0);

if (isset($_SESSION["uid"])) {
   $_COOKIE['username'] = $_SESSION["uid"];
   header("location:dist/");
}

 ?>
 
<head>
     <link rel="shortcut icon" href="includes/pics/logo.png" style="width: 100%; " type="image/png"> 

<title>MSG Assets | Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            /*background: url(includes/pics/login-background.png);*/

        }

.body-cover{
    width: 100% ; 
    height: 100%; 
    position: absolute;
    background: rgba(0,0,0, 0.4);
   /*background-color: inherit;*/
    z-index: -2;
  }


.layer2{

    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url(includes/pics/login-background.png);
    background-size:cover;    
    background-attachment: fixed;
    background-repeat:no-repeat;
   background-position:center;
    z-index: 1;
/*transition: 2s;*/
}


.layer1{

    position: absolute;
    top: 50%;
    left: 25%;
    width: 400px;
    height: 300px;
    background-color: inherit;
    border-radius: 10px;
    /*transform: translate(-50%,-50%);*/
    /*background: url(includes/pics/login-background.png);*/

    z-index: 1;     
    transition: 0.5s;
 }

 ::placeholder {
  color: #FFF;
  opacity: 0.5; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #FFF;
 opacity: 0.5;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: #FFF;
 opacity: 0.5;
}

.layer1:hover{
/*box-shadow: 5px 5px 5px 5px #114F89;*/

}
/*style="width: 30%; margin-top: 1%;margin-bottom: 1%;"*/
    </style>
<body class="layer2">
      <div class="body-cover"></div>
    <div class="loginbox  layer1">
    <!-- <img src="avatar.png" class="avatar"> -->
  <div>
    <img  src="includes/pics/logo.png" class="avatar" >
  </div>

<!--   <h1 style="text-align: center;">Login</h1> 
 -->        <form method="post" name="login">
            <p>Domain Username</p>
            <input type="text" required="true" name="userLogin" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" required="true" name="userPassword" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <!-- <a href="#">Lost your password?</a><br> -->
            <!-- <a href="#">Don't have an account?</a> -->


<?php

if(isset($_POST['submit']))
{

//header('location:includes/php/loginAction.php?user_name='.$_POST['userLogin']); 
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
    //  if ($ldap_conn) {
      //echo 'Connected ! <br>';
   // }
        //Connect and return true or false
        //$ldap_bind = @ldap_bind($ldap_conn,$ldap_user/*user@example.com*/,$ldap_pass);
    $ldap_bind = @ldap_bind($ldap_conn,$ldap_user.LDAP::LDAP_DOMAIN_V/*user@example.com*/,$ldap_pass);
        //echo 'here we go'.$ldap_bind ;
        if($ldap_bind && !empty($ldap_pass))
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
        
    </div>

</body>
</head>
</html>