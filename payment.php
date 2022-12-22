<?php 
    session_start();
    if (!isset($_SESSION["login"])){
        $_SESSION['payment'] = "<center><p> Anda Harus Login Terlebih Dahulu </p>
                                <a class='btn btn-danger' href='login.php'>Login</a></td></center>";
    }
    if (isset($_SESSION["login"])){
        $_SESSION['payment'] = include 'kredit.php';
    } 
    if (isset($_POST['keluar'])) {
        session_destroy();
        header("Location: index.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=z1.0">
    <link rel="icon" href="images/logo/traveloke1.png" type="image/x-icon">
    <title>Traveloke</title>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-corporate">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-inner">
                <center>
                <div style="margin: 20px 0px 0px 0px;" class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default" src="images/logo/traveloke.png" alt="" width="208" height="46"/></a></div>
                </center>
            </div>
            </div>
          </nav>
        </div>
      </header>
    <main>
        <?php echo $_SESSION['payment']; ?>
    </main>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>