<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/logo/traveloke1.png" type="image/x-icon">
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
      <section class="section">
        <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="images/bandara/pantai.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3 style="color:black">BERAGAM TUJUAN MENAKJUBKAN</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm" style="color:black">Kami menawarkan berbagai destinasi untuk berwisata, mulai dari yang eksotik hingga yang ekstrim. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="images/bandara/wp1.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3 style="color:black">PERJALANAN IMPIAN ANDA</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm" style="color:black">Agen perjalanan kami siap menawarkan liburan menarik yang dirancang sesuai dengan kebutuhan dan keinginan Anda. Anda pasti akan mendapatkan pengalaman terbaik.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="images/bandara/wp2.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3>Unique Travel Insights</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm" style="color:black">Tim kami siap memberi Anda wawasan perjalanan mingguan unik yang mencakup foto, video, dan artikel tentang jalur wisata yang belum dilalui. Kami tahu segalanya tentang tempat yang belum pernah Anda kunjungi!</p><a class="button button-default-outline button-nina button-sm" href="#">learn more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper controls-->
            <div class="swiper-pagination-wrap">
              <div class="container container-bigger">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container container-bigger form-request-wrap form-request-wrap-modern" style="margin-top:50px;">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-6 col-xxl-5">
                <div class="form-request form-request-modern bg-gray-lighter novi-background">
                  <h4>Cari Tiket Anda</h4>
                  <!-- RD Mailform-->
                  <form class="rd-mailform form-fix">
                    <div class="row row-20 row-fix">
                      <div class="col-sm-12">
                        <label class="form-label-outside">Dari</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="dari">
                            <?php
                              include_once('koneksi.php');
                              $sql = mysqli_query($koneksi, "SELECT id_bandara, nama FROM bandara ORDER BY id_bandara ASC");
                              while ($item = mysqli_fetch_array($sql)) { ?>
                              <option value="<?= $item['id_bandara'];?>"><?php echo $item['nama'];?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label-outside">Ke</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="ke">
                            <?php
                              include_once('koneksi.php');
                              $sql = mysqli_query($koneksi, "SELECT id_bandara, nama FROM bandara ORDER BY id_bandara ASC");
                              while ($item = mysqli_fetch_array($sql)) { ?>
                              <option value="<?= $item['id_bandara'];?>"><?php echo $item['nama'];?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <label class="form-label-outside">Tanggal Penerbangan</label>
                        <div class="form-wrap form-wrap-validation">
                          <!-- Select -->
                          <input class="form-input" id="dateForm" name="tanggal" type="text" data-time-picker="date">
                          <label class="form-label" for="dateForm">Pilih Tanggal</label>
                          <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                          <!--  option(value="1") Choose the date-->
                          <!--  option(value="2") Primary-->
                          <!--  option(value="3") Middle-->
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <label class="form-label-outside">Durasi</label>
                        <div class="form-wrap form-wrap-validation">
                          <!-- Select 2-->
                          <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="durasi">
                            <option value="1">1 hari</option>
                            <option value="2">2 hari</option>
                            <option value="3">3 hari</option>
                            <option value="4">4 hari</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label-outside">Dewasa</label>
                        <div class="form-wrap form-wrap-modern">
                          <input name="dewasa" class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="0">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label-outside">Anak-anak</label>
                        <div class="form-wrap form-wrap-modern">
                          <input name="anak" class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label-outside">Kelas Penerbangan</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="kelas">
                            <option value="1">Ekonomi</option>
                            <option value="2">Ekonomi Premium</option>
                            <option value="3">Bisnis</option>
                            <option value="3">First Class</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-wrap form-button">
                      <button class="button button-block button-secondary" type="submit" name="submit" onclick="document.location='jadwal.php'">Pesan Penerbangan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-variant-1 bg-default novi-background bg-cover"> 
        <div class="container container-wide">
          <div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
            <div class="col-xl-8">
              <div class="parallax-text-wrap">
                <h3>REFERENSI BANDARA</h3>
              </div>
              <hr class="divider divider-decorate">
            </div>
          </div>
          <div class="row row-50">
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <!-- FOTO NGURAH RAI -->
                  <figure class="event-default-image"><img src="images/bandara/ngurah.jpg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="https://id.wikipedia.org/wiki/Bandar_Udara_Internasional_Ngurah_Rai" target="_blank">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="https://goo.gl/maps/cb77C3thWYjRKXqV6" target="_blank">Bandar Udara Internasional Ngurah Rai</a></h5><span class="heading-5">The Best</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <!-- FOTO SEPINGGAN -->
                    <figure class="event-default-image"><img src="images/bandara/sepinggan.jpeg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="https://id.wikipedia.org/wiki/Bandar_Udara_Internasional_Sultan_Aji_Muhammad_Sulaiman_Sepinggan" target="_blank">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="https://goo.gl/maps/oAGPRuAqnRAw7jJX9" target="_blank">Bandar Udara Internasional Sultan Aji Muhammad Sulaiman Sepinggan</a></h5><span class="heading-5">The Best</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <!-- FOTO AHMAD YANI -->
                  <figure class="event-default-image"><img src="images/bandara/ahmad.jpg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="https://id.wikipedia.org/wiki/Bandar_Udara_Internasional_Jenderal_Ahmad_Yani" target="_blank">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="https://goo.gl/maps/mpk3vkAbN4cGgWDi9" target="_blank">Bandar Udara Internasional Ahmad Yani</a></h5><span class="heading-5">The Best</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <!-- FOTO SOEKARNO HATTA -->
                  <figure class="event-default-image"><img src="images/bandara/soekarno.jpeg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="https://id.wikipedia.org/wiki/Bandar_Udara_Internasional_Soekarno%E2%80%93Hatta" target="_blank">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="https://goo.gl/maps/435xKtNAzGFbmZyb7" target="_blank">Bandar Udara Internasional Soekarno–Hatta</a></h5><span class="heading-5">The Best</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <!-- FOTO KUALANAMU -->
                  <figure class="event-default-image"><img src="images/bandara/kualamanu.jpg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="https://id.wikipedia.org/wiki/Bandar_Udara_Internasional_Kualanamu" target="_blank">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="https://goo.gl/maps/K7RqzuoxFQDR6oq59" target="_blank">Bandar Udara Internasional Kualanamu</a></h5><span class="heading-5">The Best</span>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <!-- FOTO JUANDA -->
                  <figure class="event-default-image"><img src="images/bandara/juanda.jpeg" alt="" width="570" height="370"/>
                  </figure>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="https://id.wikipedia.org/wiki/Bandar_Udara_Internasional_Juanda" target="_blank">learn more</a></div>
                </div>
                <div class="event-default-inner">
                  <h5><a class="event-default-title" href="https://goo.gl/maps/Gzz3bAEtkAaynPdr5" target="_blank">Bandar Udara Internasional Juanda</a></h5><span class="heading-5">The Best</span>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- our advantages-->
      <section class="section section-lg bg-gray-lighter novi-background bg-cover text-center">
        <div class="container container-wide">
          <h3>PELAYANAN KAMI</h3>
          <div class="divider divider-decorate"></div>
          <div class="row row-50 justify-content-sm-center text-left">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-airplane"></div>
                <p class="big box-minimal-title">Tiket pesawat</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Di agen perjalanan kami, Anda dapat memesan tiket pesawat ke tujuan dunia mana pun. Kami juga menyediakan pemesanan tiket online melalui website kami hanya dalam beberapa langkah.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-map"></div>
                <p class="big box-minimal-title">Fleksibel</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Lakukan transaksi dari mana saja kapan saja, dari desktop, aplikasi seluler, atau web seluler.</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-city"></div>
                <p class="big box-minimal-title">Pelayanan Offline</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Kami menawarkan bantuan untuk pelanggan apabila terdapat kendala dapat langsung datang ke kantor kami</div>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal box-minimal-border">
                <div class="box-minimal-icon novi-icon mdi mdi-beach"></div>
                <p class="big box-minimal-title">Pelayanan Travel terjamin</p>
                <hr>
                <div class="box-minimal-text text-spacing-sm">Agensi kami menyediakan beragam fitur disesuaikan untuk klien yang mencari travel eksklusif dan berkesan.</div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Tips & tricks-->
      <section class="section section-lg novi-background bg-cover bg-default text-center">
        <div class="container-wide">
          <div class="row row-50">
            <div class="col-sm-12">
              <h3>BERITA TERBARU</h3>
              <div class="divider divider-decorate"></div>
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-carousel-team owl-carousel-inset" data-items="1" data-md-items="2" data-xl-items="3" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="false" data-dots="true" data-autoplay="true">
                <article class="post-blog"><a class="post-blog-image" href="#"><img src="images/negara/hotel.jpg" alt="" width="570" height="415"/></a>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><a class="button-tags">Hotels</a></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">Rahman Wahid</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><a class="post-blog-title" href="artikel_hotel.php">5 Hotel Terbaik di Indonesia</a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"></a>
                    </div>
                  </div>
                </article>
                <article class="post-blog"><a class="post-blog-image" href="#"><img src="images/negara/plan.jpg" alt="" width="570" height="415"/></a>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><a class="button-tags">Tips</a></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">Michael Jordan</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><a class="post-blog-title" href="artikel_plan.php">Tips Cara Merencanakan Liburan Yang Baik</a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment" href="#"></a>
                    </div>
                  </div>
                </article>
                <article class="post-blog"><a class="post-blog-image" href="#"><img src="images/negara/asia.jpg" alt="" width="570" height="415"/></a>
                  <div class="post-blog-caption">
                    <div class="post-blog-caption-header">
                      <ul class="post-blog-tags">
                        <li><a class="button-tags">Traveling</a></li>
                      </ul>
                      <ul class="post-blog-meta">
                        <li><span>by</span>&nbsp;<a href="#">Riyan Bagas</a></li>
                      </ul>
                    </div>
                    <div class="post-blog-caption-body">
                      <h5><a class="post-blog-title" href="artikel_lokal.php">Top 5 Wisata Lokal Dengan Biaya Rendah</a></h5>
                    </div>
                    <div class="post-blog-caption-footer">
                      <time datetime="2019">Feb 27, 2019 at 6:53 pm</time><a class="post-comment"></a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-lg text-center bg-gray-lighter novi-background bg-cover">
        <div class="container container-bigger">
          <h3>Testimoni</h3>
          <div class="divider divider-decorate"></div>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-layout-1" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-autoplay="true">
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="images/testimoni/nita.png" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>Saya ingin mengucapkan terima kasih banyak karena telah merencanakan perjalanan ke Bali untuk saya dan pacar saya. Itu luar biasa dan melebihi harapan saya! Kami bersenang-senang dan sangat senang dengan akomodasi travel ini. </p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Srianita</p>
                  <p class="quote-boxed-small">Surakarta</p>
                </div>
              </div>
            </article>
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="images/testimoni/anna.png" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>Saya memiliki waktu yang luar biasa dalam perjalanan kami ke Gorontalo, saya memiliki pengalaman yang luar biasa. Saya menyukai lokasi desa karena saya merasa hanya saat itu kami dapat melihat orang pedesaan dan bagaimana mereka benar-benar hidup. Layanannya luar biasa dan semua orang sangat penuh perhatian!</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Anna Sanya</p>
                  <p class="quote-boxed-small">Sukoharjo</p>
                </div>
              </div>
            </article>
            <article class="quote-boxed">
              <div class="quote-boxed-aside"><img class="quote-boxed-image" src="images/testimoni/anang.png" alt="" width="210" height="210"/>
              </div>
              <div class="quote-boxed-main">
                <div class="quote-boxed-text">
                  <p>Hanya ingin mengucapkan banyak, terima kasih banyak telah membantu saya menyiapkan liburan yang menakjubkan! Keponakan saya dan saya bersenang-senang! Akomodasi travel sempurna seperti pelayanan yang ramah, bantuan pemesanan tiket dll. Kami memiliki kenangan indah dan tidak bisa cukup berterima kasih!</p>
                </div>
                <div class="quote-boxed-meta">
                  <p class="quote-boxed-cite">Anang Nurjaya</p>
                  <p class="quote-boxed-small">Yogyakarta</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- Footer Minimal-->
          <?php 
          include 'footer.php';
          ?>
          </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>

    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by barber-->
  </body>
</html>
