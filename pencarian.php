<!DOCTYPE html>
<html lang="en">
<?php
include_once ("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM lapangan ORDER BY kode_boking DESC");
?>

  <head>
    <title>FUTSAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span>FUTSAL KITA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Tentang</a></li>
            <li class="nav-item"><a href="sewa.php" class="nav-link">Sewa</a></li>
            <li class="nav-item"><a href="jadwal.php" class="nav-link">Jadwal</a></li>
            <li class="nav-item"><a href="kontak.html" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="login.php" class="nav-link">Masuk</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('futsal1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Lihat Jadwal</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Jadwal<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
          <div class="col-md-6 pl-lg-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4">Menu Penyewaan Lapangan Futsal</h2>
<li id="cari">
  <br><br>
  <h2></h2>
        <form method="post" action="pencarian.php">
          <fieldset>
          <input type="text" name="cari" />
          <input type="submit" name="kirim" value="cari" />
          </fieldset>
        </form>
      </li>
    </body>
    <?php 
include "config.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$QueryString = "SELECT * FROM lapangan WHERE kode_boking LIKE '%$key%'";
  $result = mysqli_query($mysqli,$QueryString); 
?>

<table  border="5" align="left" width="10%">
  <thead>
    <table  border="3" align="center" width="1000px">
  <thead>
    <tr>
     <th width="1000px">KODE BOKING</th>
     <th width="1000px">NAMA</th>
     <th width="1200px">NO.HP</th>
     <th width="1300px">NAMA TEAM</th>
     <th width="50px">LAPANGAN</th>
     <th width="300px">TGL.SEWA</th>
     <th width="400px">JAM MASUK</th>
     <th width="400px">JAM KELUAR</th>
     <th width="600px">BAYAR</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <?php
      while($user = mysqli_fetch_array($result)) {
        echo("<tr>");
        echo "<td>".$user['kode_boking']."</td>";
        echo "<td>".$user['nama']."</td>";
        echo "<td>".$user['no_hp']."</td>";
        echo "<td>".$user['nama_team']."</td>";
        echo "<td>".$user['lapangan']."</td>";
        echo "<td>".$user['tgl_sewa']."</td>";
        echo "<td>".$user['jam_masuk']."</td>";
        echo "<td>".$user['jam_keluar']."</td>";
        echo "<td>".$user['bayar']."</td>";
        echo("<td> <a href='hapus.php? kode_boking=$user[kode_boking]'>delate</a></td>  ");
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-footer-2 ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Futsal Kita</h2>
              <p>Ayo main futsal, agar bahan bugar dan sehat</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="https://www.facebook.com/iqbal.amanuloh"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/zulfikaryunus1/?hl=id"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Anda Punya Pertanyaan?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jl. Prof. DR. Soepomo Sh</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+6282292039818</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">futsalkita@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>O