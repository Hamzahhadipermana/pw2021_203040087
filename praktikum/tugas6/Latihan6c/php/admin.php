<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/

?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $otomotif = query("SELECT * FROM otomotif WHERE
                picture LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                description LIKE '%$keyword%' OR
                price LIKE '%$keyword%' OR
                category LIKE '%$keyword%' ");
} else {
    $otomotif = query("SELECT * FROM otomotif");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Otomotif</title>
    <style>
        .table {
            width:100px;
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
<div class="add">
        <a href="tambah.php?id=>">Tambah Data</a>
    </div>
    <div class="container">
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">cari!</button>
        </form>
        <div class="logout">
        <a href="logout.php"><button>Logout</button></a>
        </div>
        
        <table border="1" cellspacing="0" cellpadding="13">
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Picture</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
            <?php if (empty($otomotif)): ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($otomotif as $om) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                       <a href="ubah.php?id=<?= $om['id'] ?>"><button>Ubah</button></a>
                       <a href="hapus.php?id=<?= $om['id'] ?> " onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $om["picture"]; ?>" alt=""></td>
                    <td><?= $om["nama"] ?></td>
                    <td><?= $om["description"] ?></td>
                    <td><?= $om["price"] ?></td>
                    <td><?= $om["category"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        </table>
    </div>

</body>
</html>