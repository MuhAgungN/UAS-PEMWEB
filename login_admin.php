<?php 
    ob_start();
    session_start();
    include "db.php";

       
    if(isset($_POST['submitLogoutA'])){
        setcookie("unameA",$_POST['usernameA'], time()-1);
        setcookie("passA",md5($_POST['passA']),time()-1);
        session_unset();
        header("Location: login_admin.php");
        header(refresh:0);
    }
    if(isset($_COOKIE['unameA'])){
        header('Location:user.php');
    }
    if(isset($_SESSION['usernameA'])){
        header('Location:user.php');
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
  <body style='background-image:url("image/bg_admin.jpg");background-size:cover; '>
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

 
      <div class="container">
      <center>
        <div id="login">
      
            <form method="post" action="" class=" w-50 my-5 py-3" style=' background-color: rgba(255, 255, 255, 0.63);
        padding: 5%;
        border-top-left-radius: 10% !important;
        border-top-right-radius: 10% !important;
        border-bottom-right-radius: 10% !important;
        border-bottom-left-radius: 10% !important;
        width: 65%;
        border: 2px solid rgba(255,255,255,0.1);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        color: #404040;'>
            <p class="h1 mb-4" style="font-weight:bolder;">Hi, Admin</p>
            <div class="form-group w-50 mb-4">
                <label for="Uname" style="display: -webkit-box;" class="h5">Username</label>
                <input type="text" name="usernameA" class="form-control" placeholder="Username" required  style="background-color: rgba(255, 255, 255, 0.72);"> 
            </div>

            <div class="form-group w-50 mb-5">
                <label for="Pass" style="display: -webkit-box;" class="h5">Password</label>
                <input type="password" name="passA"class="form-control" placeholder="Password" required  style="background-color: rgba(255, 255, 255, 0.72);"> 
            </div>
          

            <div class="remember mt-5">
                    <input type="checkbox" id="remember" name="rememberA" value="yes"/>
                    <label for="remember"> Remember Me</label>
            </div> 
            <input type="submit" class=" button btn mt-3 w-50 btn btn-light" name="submitA" value="Login"/>
            </form>
        </div>
        


    </center>
      </div>

      <?php
        $query=mysqli_query($koneksi, "select * from admin");
        if (isset($_POST['submitA'])) {
            $username = $_POST['usernameA'];
            $password = md5($_POST['passA']);
          
           

        
                $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password';";
                $result = mysqli_query($koneksi, $sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['usernameA']=$_POST['usernameA'];
                    $_SESSION['passA']=$_POST['passA'];
             

                    if(isset($_POST['rememberA'])){
                        if ($_POST['rememberA']=="yes"){
                            setcookie("unameA",$_POST['usernameA'], time()+60*60*30);
                            setcookie("passA",md5($_POST['passA']), time()+60*60*30);
                        }
                    }
                    header("Location: user.php");
                } else {
                    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
                }
            } 

            
      

        
    ?>
  

    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>