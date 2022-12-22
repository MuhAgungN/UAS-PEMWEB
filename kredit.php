<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style2.css">
	<title>Pembayaran</title>
</head>
<body style='background-image:url("image/bg_login.jpg");background-size:cover; '>
<center>
    <div style="margin: 20px 0px 0px 0px;" class="rd-navbar-brand"><a class="brand-name" href="index.php"><img class="logo-default" src="images/logo/logo2.png" alt="" width="208" height="46"/></a></div>

      <div class="container">
        <form action="pin.php" method="post">
        <div class="row">
            
            <div class="col">
                <h3 class="title">Alamat Billing</h3>

                <div class="mb-3 row">
                    <span>Nama Lengkap :</span>
                    <div >
                        <input id="" type="text" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <span>Email :</span>
                    <div>
                    <input id="" type="email" required>
                    </div>
                </div>
                    <div class="inputBox">
                    <span>Alamat :</span>
                    <div>
                    <input id="" type="text" required>
                    </div>
                </div>
                <div class="inputBox">
                    <span>Kota :</span>
                    <div>
                    <input id="" type="text" required>
                    </div>
                </div>
                <div class="inputBox">
                    <span>Negara :</span>
                    <div>
                    <input id="" type="text" required>
                    </div>
                </div>
            </div>

            <div class="col">
                <h3 class="title">Pembayaran</h3>
                <div class="inputBox">
                    <span>Kartu yang Diterima :</span>
                    <br>
                    <img id="" src="image/bayar.png" style="width: 40%;">
                </div>
                <div class="inputBox">
                    <span>Nama Pada Kartu :</span>
                    <div>
                    <input id="namaKartu" type="text" required>
                    </div>
                </div>
                <div class="inputBox">
                    <span>Nomor Kartu Kredit :</span>
                    <div>
                    <input id="noKartu" type="number" required>
                    </div>
                </div>
                <div class="inputBox">
                    <span>Bulan Kadaluwarsa :</span>
                    <div>
                    <input id="blnKadaluwarsa" type="text" required>
                    </div>
                </div>
                <div class="inputBox">
                    <span>Tahun Kadaluwarsa :</span>
                    <div>
                    <input id="thnKadaluwarsa" type="number" required>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <input style="background: grey;" type="submit" name="submit" class="submit-btn btn" onclick="formValidation()" value="Selesaikan Pembayaran">
        <br><br>
        <a href="index.php"><input style="background: grey;" type="button" class="submit-btn btn" onclick="return confirm('Apakah Anda yakin akan mebatalkan transaksi?')" value="Batal"></a>
    </form>
    </center>
    
    <script>
    function formValidation() {
    var namaLengkap = document.getElementById('nama').value;
    var email = document.getElementById('email').value;
    var alamat = document.getElementById('alamat').value;
    var kota = document.getElementById('kota').value;
    var negara = document.getElementById('negara').value;
    var namaKartu = document.getElementById('namaKartu').value;
    var nomorKartu = document.getElementById('noKartu').value;
    var blnKadaluwarsa = document.getElementById('blnKadaluwarsa').value;
    var thnKadaluwarsa = document.getElementById('thnKadaluwarsa').value;

    return NamaLengkap(namaLengkap) && Email(email) && Alamat(alamat) && Kota(kota) && Negara(negara) && NamaKartu(namaKartu) && NomorKartu(nomorKartu) && BulanKadaluwarsa(blnKadaluwarsa) && TahunKadaluwarsa(thnKadaluwarsa) && sthankyou();
    return false;
    }
    function thankyou() {
    if (formValidation() === true){
        alert("Thank you for subscribing!");
    }
    }
    </script>
    </body>
</html>