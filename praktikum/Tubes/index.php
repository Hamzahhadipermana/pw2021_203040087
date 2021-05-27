<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$otomotif = query("SELECT * FROM otomotif")
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Otomotif</title>
</head>
<body>
<a href="php/login.php">
        <button type="">Masuk ke halaman admin</button>
    </a>
<div class="container">
    <?php foreach ($otomotif as $om) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $om['id'] ?>">
            <?= $om["nama"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html> -->

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/index.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="grey darken-4">
          <div class="nav-wrapper">
            <div class="container">
                <a href="#home" class="brand-logo">Hamzah Speed Shop</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="php/login.php">Login</a></li>

                </ul>
            </div>
          </div>
        </nav>
      </div>

      <!-- sidenav -->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="php/login.php">Login</a></li>
    </ul>

      <!-- slider -->
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="assets/img/slider/1.jpg"> 
            <div class="caption left-align">
              <h3>Welcome to HamzahSpeedShop</h3>
              <h5 class="light grey-text text-lighten-3"></h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/2.png"> 
            <div class="caption right-align">
              <h3>Enjoy your time</h3>
              <h5 class="light grey-text text-lighten-3">Kami Menjual Berbagai Part aksesoris Motor</h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/3.png"> 
            <div class="caption center-align">
              <h3>Don't forget to smile!</h3>
              <h5 class="light grey-text text-lighten-3"></h5>
            </div>
          </li>
        </ul>
    </div>

    <div class="container center">
      <h4>Detail Produk</h2>
      <?php foreach ($otomotif as $om) : ?>
        <p class="nama">
          <a href="php/detail.php?id=<?= $om['id'] ?>">
              <?= $om["nama"] ?>
          </a>
        </p>
        <?php endforeach; ?>
    </div>

    <!-- footer -->
    <footer class="grey darken-4 white-text center">
          <p class="flow-text">HamzahHa. Copyright 2021</p>
      </footer>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 600,
            interval: 3000
        });
    </script>
    </body>
  </html>
