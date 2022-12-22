<!doctype html>
<html lang="en">

<head>
    <!-- Site Title-->
    <title>Data Penumpang</title>
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

<body>
    <?php
        include 'header.php';
    ?>
    <center>
    <div class="container">
        <form action="inputpenumpang.php" method="POST">
            <div class="container-fluid container-center" style="padding-top: 10px; align-items: center">
                <div class="card" style="width: 40rem;">
                    <div class="card-body">
                        <h2 class="card-title text-center">Data Penumpang</h2>
                        <br>
                        <div class="mb-3 row">
                            <label style="margin: 15px;">Username :</label>
				                    <select style="margin: 10px 30px 10px 30px;" name="username" class="form-control" required autofocus>
				                        <?php
				                            include "koneksi.php";
				                            $user = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id ASC") or die(mysqli_error($koneksi));
				                            foreach ($user as $data) {
				                                echo '
				                                <option value="'.$data['id'].'">'.$data['username'].'</option>';
				                            }
				                        ?>
				                    </select>
                        </div>  
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama :</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ktp" class="col-sm-3 col-form-label">No KTP :</label>
                            <div class="col-sm-8">
                                <input type="text" name="ktp" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenisPenumpang" class="col-sm-3 col-form-label">Jenis Penumpang :</label>
                            <div class="col-sm-8">
                                <input type="text" name="jenisPenumpang" class="form-control" required autofocus placeholder="Dewasa/Anak-Anak/Bayi">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenisKelamin" class="col-sm-3 col-form-label">Jenis Kelamin :</label>
                            <div class="col-sm-8">
                                    <input type="text" name="jenisKelamin" class="form-control" required autofocus placeholder="Laki-Laki/Perempuan">
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email :</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tlp" class="col-sm-3 col-form-label">No telp :</label>
                            <div class="col-sm-8">
                                <input type="text" name="tlp" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
                            <div class="col-sm-8">
                                <input type="text" name="alamat" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kota" class="col-sm-3 col-form-label">Kota :</label>
                            <div class="col-sm-8">
                                <input type="text" name="kota" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="provinsi" class="col-sm-3 col-form-label">Provinsi :</label>
                            <div class="col-sm-8">
                                <input type="text" name="provinsi" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tambahanBagasi" class="col-sm-3 col-form-label">Tambahan Bagasi :</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="tambahanBagasi" required autofocus placeholder="5 / 10 / 15">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kursi" class="col-sm-3 col-form-label">Kursi :</label>
                            <div class="col-sm-8">
                                <input type="text" name="kursi" class="form-control" required autofocus>
                            </div>
                        </div> 
                        <div class="mb-3 row">
                            <label style="margin: 15px;">ID Penerbangan :</label>
				                    <select style="margin: 10px 30px 10px 30px;" name="penerbangan" class="form-control" required autofocus>
				                        <?php
				                            include "koneksi.php";
				                            $user = mysqli_query($koneksi, "SELECT * FROM penerbangan ORDER BY id_penerbangan ASC") or die(mysqli_error($koneksi));
				                            foreach ($user as $data) {
				                                echo '
				                                <option value="'.$data['id_penerbangan'].'">'.$data['id_penerbangan'].'</option>';
				                            }
				                        ?>
				                    </select>
                        </div>   
                    </div>
                    <input style="margin: 30px;" class="button button-secondary" type="submit" name="submit" value="Submit"> 
                </div>
            </div>     
        </form>
    </div>
    </center>
    <br>
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ktp = $_POST['ktp'];
        $jenisPenumpang = $_POST['jenisPenumpang'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $email = $_POST['email'];
        $tlp = $_POST['tlp'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $provinsi = $_POST['provinsi'];
        $tambahan = $_POST['tambahanBagasi'];
        $kursi = $_POST['kursi'];
        $username = $_POST['username'];
        $idPenerbangan = $_POST['penerbangan'];

        include_once("koneksi.php");
        $result = mysqli_query($koneksi, "INSERT INTO penumpang(nama,no_ktp,jenis_penumpang,jenis_kelamin,email,no_telp,alamat,kota,provinsi,tambahan_bagasi,kursi,id_penerbangan,id_user) VALUES ('$nama','$ktp','$jenisPenumpang','$jenisKelamin','$email','$tlp','$alamat','$kota','$provinsi','$tambahan','$kursi','$idPenerbangan','$username')");

        if($result){
            echo "<center><h2>Data Penumpang Berhasil Ditambahkan!</h2></center>";
            header("Location: payment.php");
        }
    }
    ?>
    <?php 
    include 'footer.php';
    ?>

    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> 
        
    </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>