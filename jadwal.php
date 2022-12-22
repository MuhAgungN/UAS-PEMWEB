<?php
require_once('koneksi.php');
$result = mysqli_query($koneksi, "SELECT  * FROM penerbangan ORDER BY id_penerbangan ASC");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Required meta tags -->
   
    <title>Jadwal Penerbangan Traveloke</title>
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8f7cff5ee7757412879aedf3efbfaee01">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style type="text/css" class="init">
    
    </style>
    <script type="text/javascript" src="/media/js/site.js?_=1d5abd169416a09a2b389885211721dd" data-domain="datatables.net" data-api="https://plausible.sprymedia.co.uk/api/event"></script>
    <script src="https://media.ethicalads.io/media/client/ethicalads.min.js"></script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fadvanced_init%2Fhtml5-data-options.html" async=""></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
    <meta name="format-detection" content="telephone=no">
      
     
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script type="text/javascript" class="init">
      $(document).ready(function () {
        $('#example').DataTable();
      });
    </script>
    <script src="https://server.ethicalads.io/api/v1/decision/?publisher=datatablesnet&amp;ad_types=image-v1&amp;div_ids=ad-header&amp;callback=ad_1670066062246_521634&amp;keywords=javascript%7Ccss%7Capi&amp;campaign_types=paid%7Cpublisher-house%7Ccommunity%7Chouse&amp;format=jsonp&amp;client_version=1.6.2&amp;url=https%3A%2F%2Fdatatables.net%2Fexamples%2Fadvanced_init%2Fhtml5-data-options.html" type="text/javascript" async=""></script>
    </head>
   
    </script>
    <script src="https://server.ethicalads.io/api/v1/decision/?publisher=datatablesnet&amp;ad_types=image-v1&amp;div_ids=ad-header&amp;callback=ad_1670066062246_521634&amp;keywords=javascript%7Ccss%7Capi&amp;campaign_types=paid%7Cpublisher-house%7Ccommunity%7Chouse&amp;format=jsonp&amp;client_version=1.6.2&amp;url=https%3A%2F%2Fdatatables.net%2Fexamples%2Fadvanced_init%2Fhtml5-data-options.html" type="text/javascript" async=""></script>
    

    <title>Library</title>
  </head>
  <body>
    <?php
    include 'header.php';
    ?>
     <main>
      <div class="container-fluid mt-3">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-9">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jadwal Penerbangan Yang Tersedia</h5>
                <hr>
                <div class="d-flex justify-content-center">
                  <div class="spinner-border text-primary" role="status" id="load" style="position: absolute; top: 50%; display: none;">
                  </div>
                </div>
                <form>
                  
                  <div class="form-group">
                    <table id="example" class="display dataTable" width="100%" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]" aria-describedby="example_info" style="width: 100%;">
                      <thead>
                          <tr>
                              <th class="sorting sorting_dsc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 133.594px;">No</th>
                              <th class="sorting sorting_dsc" tabindex="0" aria-controls="tabel-data" rowspan="1" colspan="1" aria-sort="descending" aria-label="Name: activate to sort column ascending" style="width: 131.172px;">Tanggal</th>
                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 74.8906px;">Jam</th>
                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 74.8906px;">Kedatangan</th>
                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 74.8906px;">Tujuan</th>
                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 74.8906px;">Berangkat</th>
                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 74.8906px;">Kelas</th>
                              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 74.8906px;">Status</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $no=1;
                          while ($item = mysqli_fetch_array($result)) {

                          ?>
                            <tr>
                              <td><?= $no++; ?></td>
                              <td><?= $item['tanggal_berangkat'];?></td>
                              <td><?= $item['jam_berangkat'];?></td>
                              <td><?= $item['tanggal_sampai'];?></td>
                              <td><?php
                           
                              $namaBandaraAsal="SELECT * FROM bandara WHERE id_bandara='".$item['bandara_tujuan']."'";
                              $tampilBandara1=mysqli_query($koneksi, $namaBandaraAsal);
                              $hasilBandara1 = mysqli_fetch_assoc($tampilBandara1);
                              echo $hasilBandara1['nama'];
                              ?></td>
                              <td><?php
                           
                              $namaBandaraAsal="SELECT * FROM bandara WHERE id_bandara='".$item['bandara_berangkat']."'";
                              $tampilBandara1=mysqli_query($koneksi, $namaBandaraAsal);
                              $hasilBandara1 = mysqli_fetch_assoc($tampilBandara1);
                              echo $hasilBandara1['nama'];
                              ?></td>

                              <td><?= $item['tipe'];?></td>
                              <td><?= $item['status'];?></td>
                              
                              <td>
                              <a class="btn btn-primary" href="payment.php">Beli Tiket</a>
                            </tr>
                          <?php } ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>



    </main>
    <?php
    include'footer.php';
    ?>



    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
      $(document).ready(function () {
        $('#tabel-data').DataTable({
          order: [[3, 'desc']],
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        var eventFired = function (type) {
            var n = $('#demo_info')[0];
            n.innerHTML += '<div>' + type + ' event - ' + new Date().getTime() + '</div>';
            n.scrollTop = n.scrollHeight;
        };
     
        $('#tabel-data')
            .on('order.dt', function () {
                eventFired('Order');
            })
            .on('search.dt', function () {
                eventFired('Search');
            })
            .on('page.dt', function () {
                eventFired('Page');
            })
            .DataTable();
    });
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>


  </body>

</html>
