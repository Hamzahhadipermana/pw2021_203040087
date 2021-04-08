<?php
/* 
    Hamzah Hadi Permana
    203040087
    github.com/Hamzahhadipermana/pw2021_203040087
    Pertemuan 4
    Materi Minggu ini mempelajari mengenai function
*/
?>

<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi"); ?></h1>
</body>
</html>