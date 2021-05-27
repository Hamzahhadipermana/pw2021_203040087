<?php
// $mahasiswa = [
//     ["Hamzah Hadi Permana", "203040087", "hamzahhadipermana18@gmail.com", "Teknik Informatika"],
//     ["Farhan alfauzi", "203040085", "farhanalfauzii@gmail.com", "Teknik Informatika"]
// ];

// array associative
// definisinya sama  seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Hamzah Hadi Permana",
        "nrp" => "203040087",
        "email" => "hamzahhadipermana18@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "M. Rafliansyah",
        "nrp" => "203040105",
        "email" => "rafliansyah21@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Farhan Alfauzi",
        "nrp" => "203040085",
        "email" => "farhamalfauzii@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "3.jpg"
    ],
    [
        "nama" => "Ray Gineung P.",
        "nrp" => "203040099",
        "email" => "raypz642@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Paiz Abdul J.",
        "nrp" => "203040108",
        "email" => "takumisento34@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "5.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
    img {
        width : 150px;
    }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ):?>   
    <ul>
    <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
    </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>