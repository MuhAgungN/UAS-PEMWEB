<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title -->
    <title>Masukkan PIN</title>
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
      <br>
      <br>
      <center>
      <div style="margin: 20px 0px 0px 0px;" class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default" src="images/logo/traveloke.png" alt="" width="208" height="46"/></a></div>
      <br>
      <br>
        <div class="col-lg-6">
          <h5>PIN Anda Adalah 1957</h5>
          <h5>Masukkan PIN!</h5>
        </div>
        <br>
        <div class="col-lg-2">
          <div class="form-wrap form-wrap-modern">
            <input name="pin" id="pin" class="form-input">
          </div>
        </div>  
        <br>
        <div class="col-lg-3">
          <button name="submit" class="button button-block button-secondary btn-form-change btn-success" type="submit" onclick="myFunction()">Submit</button>
        </div> 
      </center>
      <br>
      <br>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>

    <script>
      function myFunction() {
        let x = document.getElementById("pin").value;
        let text;
        if (x == "1957"){
          alert("PIN Anda Valid!")
          location.replace("index.php")
        } else {
          alert("PIN Anda Tidak Valid! Silahkan Ulangi!")
          exit;
        }

        document.getElementById("pin").innerHTML = text;
      }
    </script>

    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by barber-->
  </body>
</html>