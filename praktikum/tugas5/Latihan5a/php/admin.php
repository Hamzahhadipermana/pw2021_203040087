<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$otomotif = query("SELECT * FROM otomotif");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Latihan5a</title>
    <style>
        .table {
            width:150px;
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
            <?php $i = 1; ?>
            <?php foreach ($otomotif as $om) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href=""><button>Ubah</button></a>
                        <a href=""><button>Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $om["picture"]; ?>" alt=""></td>
                    <td><?= $om["nama"] ?></td>
                    <td><?= $om["description"] ?></td>
                    <td><?= $om["price"] ?></td>
                    <td><?= $om["category"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>