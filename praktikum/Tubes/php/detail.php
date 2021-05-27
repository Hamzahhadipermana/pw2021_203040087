<?php 

	// Mengecek apakah ada id yang dikirimkan
	// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$otomotif = query("SELECT * FROM otomotif WHERE id = $id")[0];
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail php</title>
	<style>
        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
	<div class="container">
		<div class="picture">
			<img src="../assets/img/<?= $otomotif["picture"]; ?>" alt="">
		</div>
		<div class="description">
			<p><?= $otomotif["nama"]; ?></p>
			<p><?= $otomotif["description"]; ?></p>
			<p><?= $otomotif["price"]; ?></p>
			<p><?= $otomotif["category"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>

</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/detail.css">
    <title>Detail</title>
  </head>
  <body>
    <!-- Detail -->
    <div class="auth">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="card">
              <div class="card-body">
                <h3 class="mb-5">Detail Produk</h3>
                <div class="picture">
                  <img src="../assets/img/<?= $otomotif["picture"]; ?>" alt="">
                </div>
                <div class="description">
                  <p><?= $otomotif["nama"]; ?></p>
                  <p><?= $otomotif["description"]; ?></p>
                  <p><?= $otomotif["price"]; ?></p>
                  <p><?= $otomotif["category"]; ?></p>
                </div>
                <button type="button" class="btn btn-outline-danger"><a href="../index.php">Kembali</a></button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Detail -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>