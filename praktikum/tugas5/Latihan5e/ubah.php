<?php 
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

<!DOCTYPE html>
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
            <label for="picture">Picture</label><br>
            <input type="file" name="picture" id="picture" value="<?= $om["picture"]; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" value="<?= $om["nama"]; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description</label><br>
            <input type="descrition" name="description" id="description" value="<?= $om["description"]; ?>"><br><br>
        </li>
        <li>
            <label for="price">Price</label><br>
            <input type="price" name="price" id="price" value="<?= $om["description"]; ?>"><br><br>
        </li>
        <li>
            <label for="category">Category</label><br>
            <input type="category" name="category" id="category" value="<?= $om["category"]; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="Ubah">Ubah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
        </form>
    </div>
</body>
</html>