<?php
    ob_start(); 
    include "db.php";
    include "ajax_regis.php";

    
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
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
   
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
		<![endif]--> 
    </head>
  <body style='background-image:url("image/bg_register.jpg");background-size:cover; '>
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
    <div>
   

   <form action="" method="post" enctype="multipart/form-data" class=" w-50 mt-5 py-3 form1" style=' background-color: rgba(255, 255, 255, 0.63);
   padding: 5%;
   border-top-left-radius: 10% !important;
   border-top-right-radius: 10% !important;
   border-bottom-right-radius: 10% !important;
   border-bottom-left-radius: 10% !important;
   width: 65%;
   border: 2px solid rgba(255,255,255,0.1);
   box-shadow: 0 0 40px rgba(8,7,16,0.6);
   color: #404040;'>
       <p class="h1 mb-4" style="font-weight:bolder;">Registrasi</p>

       <div class="form-group mb-4 w-75">
           <label for="Uname" style="display: -webkit-box;" class="h5">Username</label>
           <input type="text" name="username" class="form-control" placeholder="Username" id='uname' required="true" style="background-color: rgba(255, 255, 255, 0.72);"> 
       </div>
       <div class="form-group mb-4 w-75">
           <label for="Pass" style="display: -webkit-box;" class="h5">Password</label>
           <input type="password" name="pass" class="form-control" placeholder="Password" id='password' required="true" style="background-color: rgba(255, 255, 255, 0.72);">
           <small class="form-text text-muted" style="font-size:x-small">Must contain min 8 character,1 number,1 capital letter.</small>
       </div>
       <div class="form-group mb-4 w-75">
           <label for="PassUlang" style="display: -webkit-box;" class="h5">Ulangi Password</label>
           <input type="password" name="passUlang" class="form-control" placeholder="Ulangi Password" id='upassword' required="true" style="background-color: rgba(255, 255, 255, 0.72);">
       </div>

       <div class="form-group mb-4 w-75">
           <label for="Email" style="display: -webkit-box;" class="h5">Email</label>
           <input type="email" name="email" class="form-control" placeholder="Email" id='email' required="true" style="background-color: rgba(255, 255, 255, 0.72);">
       </div>

       <Button type='button' class=" button btn mt-3 w-50 btn-dark"  name="nextReg" value="next" id="next">Next</Button>
       </div>




   </form>


   <form action="register.php" method="post" enctype="multipart/form-data" class="w-50 mt-5 py-3 form2" style=' background-color: rgba(255, 255, 255, 0.63);
   padding: 5%;
   border-top-left-radius: 10% !important;
   border-top-right-radius: 10% !important;
   border-bottom-right-radius: 10% !important;
   border-bottom-left-radius: 10% !important;
   width: 65%;
   border: 2px solid rgba(255,255,255,0.1);
   box-shadow: 0 0 40px rgba(8,7,16,0.6);
   color: #404040;
   display:none'>
  
   <p class="h1 mb-4" style="font-weight:bolder;">Registrasi</p>   
   
   <div class="form-group mb-4 w-75">
           <label for="Uname" style="display: -webkit-box;" class="h5">Nama Depan</label>
           <input type="text" name="Fname" class="form-control" placeholder="First Name" id="fname" required> 
       </div>
       <div class="form-group mb-4 w-75">
           <label for="Uname" style="display: -webkit-box;" class="h5">Nama Belakang</label>
           <input type="text" name="Lname" class="form-control" placeholder="Last Name" id="lname" required> 
       </div>
       <div class="form-group mb-4 w-75">
           <label for="Alamat" style="display: -webkit-box;" class="h5">Alamat</label>
           <input type="text" name="Alamat" class="form-control" placeholder="Alamat" id="alamat" required> 
       </div>
       <div class="form-group mb-4 w-75">
           <label for="TanggalLahir" style="display: -webkit-box;" class="h5">Tanggal lahir</label>
           <input type='date' name="TTL" id="calendar" class="form-control datepicker" placeholder="Tanggal Lahir" required>
       </div>
       <div class="form-group col w-75">
       <label for="JenisKelamin" style="display: -webkit-box;" class="h5">Jenis Kelamin</label>
               <input type="radio" name="jenisK" value="Perempuan" checked >&nbsp Perempuan &nbsp
               <input type="radio" name="jenisK" value="Laki-Laki" >&nbsp Laki-Laki<br>
           
       </div>

       <br>
       <input type="submit" class=" button btn mt-3 w-50 btn-dark"  name="submitReg" value="Registrasi"/>
       </div>




   </form>






<center><p style="color:white;">Sudah punya akun? <a href="login.php" style="color: #f69235;">login disini</a></p></center>
<div id="msg"></div>
</center>
</div>

<?php

if(isset($_POST['submitReg'])){
    $uname=$_SESSION['user'];
    $pass=$_SESSION['pass'];
    $email=$_SESSION['email'];
    $nama=$_POST['Fname']." ".$_POST['Lname'];
    $tanggal=$_POST['TTL'];
    $negara='-';
    $provinsi='-';
    $kota=$_POST['Alamat'];
    $jenisk=$_POST['jenisK'];



$sql="INSERT INTO users (username,password,email,nama,tanggal_lahir,jenis_kelamin,kota) VALUES ('$uname','$pass','$email','$nama','$tanggal','$jenisk','$kota');";
    $result= mysqli_query($koneksi,$sql);
    $_SESSION['username']=$uname;
    $_SESSION['pass']=$pass;
       header('Location:dasboarduser.php');
  
    }



?>

    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
 $(document).on('click', '#next', function(){
    var uname=document.getElementById('uname').value;
    var passwd=document.getElementById('password').value;
    var upasswd=document.getElementById('upassword').value;
    var email=document.getElementById('email').value;
    $.ajax({
        type:"post",
        url:"ajax_regis.php",
        data: 
        {  
           'username' :uname,
           'pass':passwd,
           'passUlang':upasswd,
           'email':email
        },
 
        success: function (html) 
        {
                
            if ($.trim(html) == "1"){
                hideElement();
            }else{
                $('#msg').html(html);
            }
                //$('#msg').html(html);
                //alert(html);
                // hideElement();
        }
    });
});

function hideElement() {
            element = document.querySelector('.form1');
            element2 = document.querySelector('.form2');
            element.style.display = 'none';
            element2.style.display = 'block';
        }

</script>

<script type="text/javascript">
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear()-13;

  if (dd < 10) {
    dd = '0' + dd;
  }

  if (mm < 10) {
    mm = '0' + mm;
  } 
      
  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("calendar").setAttribute("max", today);
</script>

  

  </body>
</html>