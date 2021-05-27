<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];
    
    // abil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0){
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 *24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<form action="" method="post">
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau pasword salah</p>
    <?php endif; ?>
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="submit">Login</button>
    <div class="registrasi">
        <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
</form>
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
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
  </head>
  <body>
    <!-- Login -->
    <div class="auth">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="card">
              <div class="card-body">
                <h3 class="mb-5">Form Log In</h3>
                <form action="" method="post">

                  <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username atau Password salah</p>
                  <?php endif; ?>

                  <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Masukan username" required>
                  </div>
                  
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Masukan password" required>
                  </div>

                  <div class="row">
                    <div class="col-6 text-left">
                      <div class="form-group form-check ml-2">
                        <input type="checkbox" class="form-check-input" name="remember">
                        <label for="remember" class="form-check-label ml-2"> Remember me?</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group my-4">
                    <button type="submit" name="submit" class="btn btn-success form-control">Log In</button>
                  </div>
                  <p>Belum punya akun?<a href="registrasi.php"> Registrasi</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>