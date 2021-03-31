<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php
//Melakukan koneksi ke Database
$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal");

// Memilih Database
mysqli_select_db($conn, "prakpw_otomotif_203040087") or die ("database salah");

//Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM otomotif");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan4a</title>
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
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?=$i ?></td>
                    <td><img src="assets/img/<?= $row["picture"]; ?>"></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["description"] ?></td>
                    <td><?= $row["price"] ?></td>
                    <td><?= $row["category"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>