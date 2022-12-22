<?php
	include "koneksi.php";	
	

    session_start();

    include "db.php";
     if(isset($_COOKIE['uname'])){
        $username=$_COOKIE['uname'];
        $password=$_COOKIE['pass'];
        tampilkanData($username);
    } else if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $password = $_SESSION['pass'];
       tampilkanData($username);
    } else{
        echo "<center><h1>Anda harus login terlebih dahulu</h1></center>";
    }

?>

<?php function tampilkanData($userSet){
	include "koneksi.php";	
    include "db.php";
	$username=$userSet;


	$data = "SELECT * FROM users WHERE username='$username'";
	$eksekusi = mysqli_query($koneksi, $data);
	$hasil = mysqli_fetch_assoc($eksekusi);
	$_SESSION['id_user'] = $hasil['id'];
	$_SESSION['username'] = $hasil['username'];
	$_SESSION['email'] = $hasil['email'];
	$_SESSION['nama'] = $hasil['nama'];
	$_SESSION['tanggal_lahir'] = $hasil['tanggal_lahir'];
	$_SESSION['negara'] = $hasil['negara'];
	$_SESSION['provinsi'] = $hasil['provinsi'];
	$_SESSION['kota'] = $hasil['kota'];
	$_SESSION['jenis_kelamin'] = $hasil['jenis_kelamin'];

	$tiket = "SELECT * FROM penumpang WHERE id_user='".$hasil['id']."'";
	$tampil = mysqli_query($koneksi, $tiket);

	if ($tampil->num_rows > 0){
		$hasil2 = mysqli_fetch_assoc($tampil);
		$_SESSION['nama'] = $hasil2['nama'];
		$_SESSION['no_ktp'] = $hasil2['no_ktp'];
		$_SESSION['jenis_penumpang'] = $hasil2['jenis_penumpang'];
		$_SESSION['jenis_kelamin'] = $hasil2['jenis_kelamin'];
		$_SESSION['email'] = $hasil2['email'];
		$_SESSION['no_telp'] = $hasil2['no_telp'];
		$_SESSION['provinsi_tujuan'] = $hasil2['provinsi'];
		$_SESSION['tambahan_bagasi'] = $hasil2['tambahan_bagasi'];
		$_SESSION['kursi'] = $hasil2['kursi'];
		$_SESSION['id_penerbangan'] = $hasil2['id_penerbangan'];
		$_SESSION['id_penumpang'] = $hasil2['id_penumpang'];


		$terbang = "SELECT * FROM penerbangan JOIN penumpang ON penerbangan.id_penerbangan=penumpang.id_penerbangan JOIN users ON id=id_user   WHERE id_user='".$hasil['id']."'";
		$tampil2 = mysqli_query($koneksi, $terbang);
		if ($tampil2->num_rows > 0){
			$hasil3 = mysqli_fetch_assoc($tampil2);
			$_SESSION['tanggal_berangkat'] = $hasil3['tanggal_berangkat'];
			$_SESSION['jam_berangkat'] = $hasil3['jam_berangkat'];
			$_SESSION['tanggal_sampai'] = $hasil3['tanggal_sampai'];
			$_SESSION['jam_sampai'] = $hasil3['jam_sampai'];
			
			$namaBandaraAsal="SELECT * FROM bandara WHERE id_bandara='". $hasil3['bandara_berangkat']."'";
			$tampilBandara1=mysqli_query($koneksi, $namaBandaraAsal);
			$hasilBandara1 = mysqli_fetch_assoc($tampilBandara1);
			$_SESSION['bandara_berangkat'] = $hasilBandara1['nama'];

			$namaBandaraT="SELECT * FROM bandara WHERE id_bandara='". $hasil3['bandara_tujuan']."'";
			$tampilBandara2=mysqli_query($koneksi, $namaBandaraT);
			$hasilBandara2 = mysqli_fetch_assoc($tampilBandara2);
			$_SESSION['bandara_tujuan'] = $hasilBandara2['nama'];


			$_SESSION['tipe'] = $hasil3['tipe'];
			$_SESSION['provinsi'] = $hasil3['provinsi'];
			$_SESSION['tambahan_bagasi'] = $hasil3['tambahan_bagasi'];
			$_SESSION['kursi'] = $hasil3['kursi'];
			
		}
		
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
		<![endif]--> 
  </head>
  <body >
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
                    <li class="" ><a style="text-decoration:none" href="index.php">Home</a>
                    </li>
                    <li><a style="text-decoration:none" href="about-us.php">About Us</a>
                    </li>
                    <li><a style="text-decoration:none" href="contacts.php">Contacts</a>
                    </li>
                    <li><a style="text-decoration:none" href="login.php">Login</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>

 

        <main>
		<div class="container mt-3">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-tittle">Akun User</h5>
							<form method="post" action="login.php" style="position:relative">
								<input type="submit" style="position:absolute; right:0;" class="button btn btn-primary mt-3" name="submitLogout" value="Logout" href="index.php"/>
							</form>
							<hr>
							<table style="margin-left: 5%;" >
								<tr>
									<td>Username</td>
									<td style="width: 1%;">:</td>
									<td><?= $_SESSION['username'] ?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td><?= $_SESSION['email'] ?></td>
								</tr>
								<tr>
									<td>Akun Atas Nama</td>
									<td>:</td>
									<td><?= $_SESSION['nama'] ?></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>:</td>
									<td><?= $_SESSION['tanggal_lahir'] ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><?= $_SESSION['kota'] ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>:</td>
									<td><?= $_SESSION['jenis_kelamin'] ?></td>
								</tr>
								<tr>
									<td>Tiket Pesawat</td>
									<td>:</td>
									<td></td>
								</tr>
							</table>
							<hr style="margin-left: 20%;">


							
							<table class="border p-5"
							<?php 
							if($tampil->num_rows == 0){
								 echo 'style="margin-left: 20%; display:none"'; 
								 exit;
								}else{
									echo 'style="margin-left: 20%; display:block"'; 
								}
								?>
							>
							<?php
function getDateNow() {
	$tz_object = new DateTimeZone('Asia/Jakarta');

	$date = new DateTime();
	$date->setTimezone($tz_object);
	return $date->format('Y\-m\-d');
}

function getTimeNow() {
	$tz_object = new DateTimeZone('Asia/Jakarta');

	$time = new DateTime();
	$time->setTimezone($tz_object);
	return $time->format('h:i:s');
}

$date = getDateNow();
$time = getTimeNow();


$data = "SELECT * FROM penerbangan WHERE id_penerbangan='".$_SESSION['id_penerbangan']."'";
$sql = mysqli_query($koneksi, $data);
$hasil = mysqli_fetch_assoc($sql);
$hasil['tanggal_berangkat'] = $hasil['tanggal_berangkat'];
$hasil['jam_sampai'] = $hasil['jam_sampai'];

if($time >= $hasil['jam_sampai'] AND $date >= $hasil['tanggal_berangkat']) {
	echo "Menghilang";
} else {
	

?>

								<tr>
									<td style="width: 35%;"><p class="h3">TIKET</p><p class=""><?= $_SESSION['nama'] ?></p></td>
									<td style="width: 15%;"></td>
									<td style="width: 15%;"></td>
									<td style="width: 25%;"></td>
					
									<td style="width: 15%; padding-bottom: 5%;" class="h1 bolder"><center><?= $_SESSION['kursi'] ?></center></td>
								</tr>
								<tr>
									<td><?= $_SESSION['no_ktp'] ?></td>
									<td><?= $_SESSION['jenis_kelamin'] ?></td>
									<td></td>
									<td><?= $_SESSION['email'] ?></td>
									<td><?= $_SESSION['no_telp'] ?></td>
								</tr>
								<tr>
									<td colspan='4'>Penerbangan Dari <?= $_SESSION['bandara_berangkat'] ?> - Ke <?= $_SESSION['bandara_tujuan'] ?></td>
									<!-- <td></td>
									<td></td> -->
									<td style=" padding-top: 7%;"></td>
								</tr>
								<tr>
									<td >Hari : <?= $_SESSION['tanggal_berangkat'] ?></td>
									<td colspan="2">Pukul : <?= $_SESSION['jam_berangkat'] ?> - <?= $_SESSION['jam_sampai'] ?> </td>
									<td></td>
								</tr>
								<tr class="mb-5">
								<td style="width: 15%; ">Tambahan Bagasi: <?= $_SESSION['tambahan_bagasi'] ?></td>
								</tr>
								<tr>
									<td colspan="5"><br><br>
									<?php

$qCariPembatalan = "SELECT * FROM pembatalan WHERE id_penumpang='".$_SESSION['id_penumpang']."'";
$tampilPembatalan = mysqli_query($koneksi, $qCariPembatalan);
if ($tampilPembatalan->num_rows > 0){
			echo '<div class="alert alert-danger" role="alert">PEMBATALAN TELAH DIAJUKAN</div>';
	}else if(isset($_POST['pembatalanPesanan'])){
		$sqlBatal="INSERT INTO pembatalan (id_penumpang,status_pembatalan,alasan) VALUES ('".$_SESSION['id_penumpang']."','Belum ACC', '".$_POST['alasanPembatalanPesanan']."');";
		$resultBatal= mysqli_query($koneksi,$sqlBatal);
	
	
	
		echo '<div class="alert alert-danger" role="alert">
		PEMBATALAN TELAH DIAJUKAN
		  </div>';
	} else{
		echo '<form action="" method="post" >
		Alasan Pembatalan: <input type="text"  name="alasanPembatalanPesanan" required/>
		<input type="submit" value="Ajukan Pembatalan" name="pembatalanPesanan" class="btn btn-danger"/>
		
	</form>';
	}
			
?>
									
									
									</td>
								</tr>
								<tr>
									<td ></td>
								</tr>

								<?php }?>
							</table>

							<hr style="margin-left: 20%;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>        

      
  

    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php } ?>