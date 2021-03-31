<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php
//Menghubungkan dengan file php lainnya
require 'php/functions.php';

//Melakukan Query
$otomotif = query("SELECT * FROM otomotif")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4b</title>
    <style>
    img{
        max-width: 150px;
    }
    </style>
</head>
    <link rel = "stylesheet" href = "css/style.css">
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($otomotif as $ot) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="assets/img/<?= $ot["picture"]; ?>"></td>
                <td><?= $ot["nama"] ?></td>
                <td><?= $ot["description"] ?></td>
                <td><?= $ot["price"] ?></td>
                <td><?= $ot["category"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>

        </table>
    </div>
</body>
</html>