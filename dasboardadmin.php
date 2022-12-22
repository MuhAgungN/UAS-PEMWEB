<?php
 
	include "koneksi.php";
	include "db.php";

	//$username = $_SESSION['usernameA'];
	
	
	

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap CSS-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Dasboard</title>
</head>
<body>
	<center>
		<form method="post" action="login_admin.php">
			<input type="submit" class="button btn btn-primary mt-3" name="submitLogoutA" value="Logout" href="login_admin.php"/>
		</form>
	</center>
	<main style="margin: -10%;">
			<div class="container mt-3">
				<div class="row">
						<div class="card-body">
							<a href="user.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">User</button>
							</a>
							<a href="bandara.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">Bandara</button>
							</a>
							<a href="pesawat.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">Pesawat</button>
							</a>
							<a href="penerbangan.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">Penerbangan</button>
							</a>
							<a href="pembatalan.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">Pembatalan</button>
							</a>
							<a href="penumpang.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">Penumpang</button>
							</a>
							<a href="harga.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">Harga</button>
							</a>
							<a href="data.php">
								<button style="width: 100%; margin: 2%;" type="button" class="btn btn-light">HighCart</button>
							</a>
						</div>
				</div>
			</div>




	</main>

	
</body>
</html>