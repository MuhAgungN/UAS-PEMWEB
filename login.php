<?php 
    ob_start(); 
    session_start();
    include "db.php";

       
    if(isset($_POST['submitLogout'])){
        setcookie("uname",$_POST['usernameL'], time()-1);
        setcookie("pass",md5($_POST['passL']),time()-1);
        session_unset();
        header("Location: login.php");
        header(refresh:0);
    }
    if(isset($_COOKIE['uname'])){
        header('Location:dasboarduser.php');
    }
    if(isset($_SESSION['username'])){
        header('Location:dasboarduser.php');
    }

   
   
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>About Us</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
		<![endif]--> 
  </head>
  <body style='background-image:url("image/bg_login.jpg");background-size:cover; '>
    <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-default">
          <nav class="rd-navbar"    data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="2px" data-lg-stick-up-offset="2px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-inner" > 
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/logo/Traveloke.png" alt="" width="208" height="46"/><img class="logo-inverse" src="images/logo-inverse-208x46.png" alt="" width="208" height="46"/></a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li><a href="about-us.php">About Us</a>
                    </li>
                    <li><a href="contacts.php">Contacts</a>
                    </li>
                    <li><a href="login.php">Login</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <body style='background-image:url("image/bg_login.jpg");background-size:cover; '>
 
      <div class="container">
    <center>
        <div id="login">
          

          
                <form method="post" action="" class=" w-50 mt-5 py-3" style=' background-color: rgba(255, 255, 255, 0.63);
        padding: 5%;
        border-top-left-radius: 10% !important;
        border-top-right-radius: 10% !important;
        border-bottom-right-radius: 10% !important;
        border-bottom-left-radius: 10% !important;
        width: 65%;
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        color: #404040; '>

                <p class="h1 mb-4" style="font-weight:bolder;">Login</p>
                    <div class="form-group w-50 mb-4">
                        <label for="Uname" style="display: -webkit-box; " class="h5">Username</label>
                        <input type="text" name="usernameL" class="form-control" placeholder="Username" required style="background-color: rgba(255, 255, 255, 0.72);"> 
                    </div>

                    <div class="form-group w-50 mb-5">
                        <label for="Pass" style="display: -webkit-box;" class="h5">Password</label>
                        <input type="password" name="passL"class="form-control" placeholder="Password" required style="background-color: rgba(255, 255, 255, 0.72);"> 
                    </div>
                

                    <div class="remember mt-5">
                            <input type="checkbox" id="remember" name="remember" value="yes"/>
                            <label for="remember"> Remember Me</label>
                    </div> 
                    <input type="submit" class=" button btn mt-3 w-50 btn btn-light" name="submitLog" value="Login"/>
                    <p>Belum punya akun? <a href="register.php" style="color: initial;">Registrasi disini</a></p>
                </form>
     
                
        </div>
        

      
        <p style="color:white;"> Atau <a href="login_admin.php" style="color: yellow;">Login sebagai Admin</a></p>
    </center>
    </div>

    <?php
        $query=mysqli_query($koneksi, "select * from users");
        if (isset($_POST['submitLog'])) {
            $username = $_POST['usernameL'];
            $password = md5($_POST['passL']);
   
           

           
                $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$password';";
                $result = mysqli_query($koneksi, $sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username']=$_POST['usernameL'];
                    $_SESSION['pass']=$_POST['passL'];
             

                    if(isset($_POST['remember'])){
                        if ($_POST['remember']=="yes"){
                            setcookie("uname",$_POST['usernameL'], time()+60*60*30);
                            setcookie("pass",md5($_POST['passL']), time()+60*60*30);
                        }
                    }
                    header("Location: dasboarduser.php");
                }
            } 

            
        

        
    ?>

    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>