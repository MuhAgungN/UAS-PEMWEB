<?php
  include "koneksi.php";  

    session_start();

    include "db.php";
     if(isset($_COOKIE['unameA'])){
        $username=$_COOKIE['unameA'];
        $password=$_COOKIE['passA'];
        tampilkanData();
    } else if(isset($_SESSION['usernameA'])){
        $username = $_SESSION['usernameA'];
        $password = $_SESSION['passA'];
       tampilkanData();
    } else{
        echo "<center><h1>Anda harus login terlebih dahulu</h1></center>";
    }

?>
<?php function tampilkanData(){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Dasboard</title>
</head>
<body>
  <main>
    <div class="container mt-3">
      <div class="row">
        <div class="col-sm-2">
          <div class="card">
            <?php include "dasboardadmin.php"; ?>
          </div>
        </div>
        <div class="col-sm-10">
          <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">Data Pesanan Tiket</h5>
                <main>
    <div class="container mt-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-9">
          <div class="card">
            <div class="card-body">
              <div class="card-title">Grafik Banyak Pemesanan</div>
              <hr>

              <?php

              $pesanan = mysqli_query($koneksi, "SELECT * from pesanan");
              while ($row = mysqli_fetch_array($pesanan)) {
                $data[] = array(
                  $row['bulan'],
                  floatval($row['total_pesanan'])
                );
              }
              $json = json_encode($data)

              ?>

              <div id="grafik"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Data Tables -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- Highcharts -->
  <script type="text/javascript">
    Highcharts.chart('grafik', {
      title: {
        text: 'Banyak Pemesanan'
      },
      subtitle: {
        text: 'Grafik'
      },
      yAxis: {
        title: {
          text: 'Banyak Pesanan'
        }
      },
      xAxis: {
        type: 'category',
        accessibility: {
          rangeDescription: 'Waktu'
        }
      },
      tooltip: {
        pointFormat: '{point.y} orang'
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
      },
      plotOptions: {
        series: {
          label: {
            connectorAllowed: false
          }
        }
      },
      series: [{
        name: 'Banyak Pesanan',
        lineWidth: 2,
        data: <?= $json ?>
      }],
      responsive: {
        rules: [{
          condition: {
            maxWidth: 500
          },
          chartOptions: {
            legend: {
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
            }
          }
        }]
      },
      chart: {
        zoomType: 'xy'
      },
    });
  </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</body>
</html>
<?php } ?>