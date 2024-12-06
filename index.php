<?php
require 'system/config/koneksi.php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="shortcut icon" href="asset/internal/img/img-local/favicon.ico">
  <link rel="stylesheet" href="asset/internal/css/style-index1.css">
  <link rel="stylesheet" href="asset/internal/css/style-index2.css">

  <script src="asset/internal/js/preloader.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>

</head>

<body>

  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="asset/internal/img/img-local/spiner.gif" width="80">
    </div>
  </div>


  <!--Navbar-->
  <header>
    <a href="#" id="logo"></a>
    <nav>
      <a href="#" id="menu-icon"></a>
      <ul id="top-menu">
        <li style="list-style: none; display: inline"></li>
        <li class="active">
          <a href="#">Beranda</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#foo">Petunjuk</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#bar">Lokasi</a>
        </li>
        <li style="list-style: none; display: inline"></li>
      </ul>
    </nav>
  </header>

  <!-- konten1 -->
  <div class="page-wrap">
    <div class="header">
      <div class="box-1">
        <h1 disabled>Bank Sampah Siporennu</h1>
        <p> Merubah sampah menjadi penghasilan tambahan Anda !!! </p>
        <br> <br>

        <div class="center">
          <a href="page/login.php" target="_blank">
            <div class="btn" align="center">Login</div>
          </a> <!-- End Btn -->
        </div>
      </div>
    </div>
  </div>
  </div>


  <!--konten2-->
  <div id="foo">
    <section class="team">
      <div class="container">
        <div class="row">
          <h1>TERTARIK BERGABUNG ???</h1>
          <p>Bank Sampah Siporennu adalah organisasi peduli lingkungan yang berlokasi di Kelurahan Lembo, Kecamatan Tallo. Fokus utama kami adalah penjualan sampah sebagai langkah nyata dalam mendukung pengelolaan sampah yang berkelanjutan. Antusiasme warga terhadap program ini menunjukkan bahwa Bank Sampah Siporennu mendapatkan perhatian khusus dari masyarakat sekitar. Jika Anda berminat untuk bergabung, silakan ikuti langkah berikut ini.
</p>
        </div>
        <div class="row mgt50px">
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/1.jpg">
            </div>
            <div class="details">
              <h3>#Tahap1<br><span>Lakukan Pendaftaran</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/2.jpg">
            </div>
            <div class="details">
              <h3>#Tahap2<br><span>Pemilahan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/3.jpg">
            </div>
            <div class="details">
              <h3>#Tahap3<br><span>Penimbangan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/4.jpg">
            </div>
            <div class="details">
              <h3>#Tahap4<br><span>Mendapat Keuntungan</span></h3>
            </div>
          </div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </section>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--konten maps-->

  <br>
  <div id="bar">
    <div class="row mgt50px">
      <h1 align="center">Lokasi Bank Sampah</h1>
      <br>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sen!2sid!4v1733379945619!5m2!1sen!2sid!6m8!1m7!1
        sQzRnNuxgWpULjWO3sbAGCA!2m2!1d-5.119774011664274!2d119.4230312304861!3f10.366593442287353!4f-26.444598150732553!
        5f0.7820865974627469" width="1362" height="470" frameborder="0" style="margin-bottom: 0; left: 10px;" allowfullscreen> </iframe></iframe>
    </div>
  </div>

  <!--footer-->
  <footer class="footer-distributed">

    <div class="footer-left">

      <a href="#" id="logo_f"></a>
      <br>

      <p class="footer-links">
      <ul>
        <a href="#">Beranda</a>
        ·
        <a href="#foo">Petunjuk</a>
        ·
        <a href="#bar">Tim Kami</a>
        ·
        <a href="#baz">Lokasi</a>
        </p>

        <p><font color="white">Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. All rights reserved.</font></p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jl. Tinumbu Lr 165A No. 259</span>Kel. Lembo Kec. Tallo, Kota Makassar.</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="sms:(+62)81342287065">(+62)812 342 287 065</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:bsusiporennu@gmail.com">bsusiporrenu@gmail.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>Kunjungi Sosial Media Kami!</span>
        Untuk yang ingin lebih dekat dengan Bank Sampah Siporennu, silahkan kunjungi sosial media kami dibawah ini!
      </p>

      <div class="footer-icons">

        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>