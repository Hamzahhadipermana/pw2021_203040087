<?php 
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$om = query("SELECT * FROM otomotif WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
        </script>";
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h3>Form Ubah Data Otomotif</h3>
        <form action="" method="post">
    <ul>
    <input type="hidden" name="id" id="id" value="<?= $om['id']; ?>">
        <li>
            <label for="picture">Picture </label><br>
            <input type="file" name="picture" id="picture" value="<?= $om['picture']; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama </label><br>
            <input type="text" name="nama" id="nama" required value="<?= $om['nama']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description </label><br>
            <input type="descrition" name="description" id="description" required value="<?= $om['description']; ?>"><br><br>
        </li>
        <li>
            <label for="price">Price </label><br>
            <input type="price" name="price" id="price" required value="<?= $om['description']; ?>"><br><br>
        </li>
        <li>
            <label for="category">Category </label><br>
            <input type="category" name="category" id="category" required value="<?= $om['category']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="Ubah">Ubah Data!</button>
        <button type="submit"><a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
        </form>
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
    <link rel="stylesheet" href="../css/ubah.css">
    <title>Ubah Data</title>
  </head>
  <body>
    <!-- Ubah Data -->
    <div class="auth">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="card">
              <div class="card-body">
                <h3 class="mb-5">Form Ubah Data</h3>
                <form action="" method="post">
                    <ul>
                    <input type="hidden" name="id" id="id" value="<?= $om['id']; ?>">
                        <li>
                            <label for="picture">Picture </label><br>
                            <input type="file" name="picture" id="picture" value="<?= $om['picture']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="nama">Nama </label><br>
                            <input type="text" name="nama" id="nama" required value="<?= $om['nama']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="description">Description </label><br>
                            <input type="descrition" name="description" id="description" required value="<?= $om['description']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="price">Price </label><br>
                            <input type="price" name="price" id="price" required value="<?= $om['price']; ?>"><br><br>
                        </li>
                        <li>
                            <label for="category">Category </label><br>
                            <input type="category" name="category" id="category" required value="<?= $om['category']; ?>"><br><br>
                        </li>
                        <br>
                        <button type="submit" name="Ubah" class="btn btn-outline-success">Ubah Data!</button>
                        <button type="button" class="btn btn-outline-danger"><a href="../php/admin.php">Kembali</a></button>
                    </ul>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Ubah Data -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>