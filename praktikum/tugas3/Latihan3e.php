<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/
?>
<?php
    $action_figure = [
    [
        "picture" => "Titanium.jpeg",
        "nama" => "Baut Titanium",
        "description" => "Baut Titanium Aksesoris Untuk Motor",
        "price" => "Rp 450,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "Probolt.jpeg",
        "nama" => "Baut Probolt",
        "description" => "Baut Probolt Aksesoris Untuk Motor",
        "price" => "Rp 340,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "MasterRem.jpeg",
        "nama" => "Master Rem Nissin",
        "description" => "Master Rem yang terbuat dari bahan dasar berkualitas untuk memenuhi standar",
        "price" => "Rp 1,225,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "KaliperNissin.jpeg",
        "nama" => "Kaliper Nissin",
        "description" => "Kaliper Nissin Monoblok 4 piston untuk matick all honda",
        "price" => "Rp 470,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "ShockOhlins.jpeg",
        "nama" => "Shock Ohlins",
        "description" => "Shock Ohlins Tabung bawah fitur klik rebound aktif",
        "price" => "Rp 1,200,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "ShockKTC.jpeg",
        "nama" => "Shock KTC",
        "description" => "Shock KTC Tabung Atas fitur klik rebound aktif",
        "price" => "Rp 950,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "Stabilizer.jpeg",
        "nama" => "Stabilizer Ohlins",
        "description" => "Stabilizer setang Ohlins alumunium (Universal)",
        "price" => "Rp 5,550,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "Paharem.jpeg",
        "nama" => "Paha Rem",
        "description" => "Paha Rem Twotone Bakaran aksesoris",
        "price" => "Rp 50,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "Disk.jpeg",
        "nama" => "Disk Nissin",
        "description" => "Disk Nissin floating 220mm ",
        "price" => "Rp 430,000",
        "category" => "Otomotif",
    ],
    [
        "picture" => "Gantungan.jpeg",
        "nama" => "Gantungan twotone",
        "description" => "Gantungan Twotone Universal aksesoris",
        "price" => "Rp 45,000",
        "category" => "Otomotif",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan3e_203040087</title>
    <style>

        .table {
            width: 100%;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
        th {
            background-color: green;
        }
        img {
            max-width: 40px;
        }
    </style>
</head>
<body>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <th>No</th>
            <th>Picture</th>
            <th>Nama</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            <tr></tr>
            <?php $nomor = 1;?>
            <?php foreach ($action_figure as $af) : ?>
               <td><?= $nomor; ?></td> 
               <td><img src="img/<?= $af["picture"]; ?>"></td>
               <td><?= $af["nama"] ?></td>
               <td><?= $af["description"] ?></td>
               <td><?= $af["price"] ?></td>
               <td class = "categori"><?= $af["category"] ?></td>
               <tr></tr>
               <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
