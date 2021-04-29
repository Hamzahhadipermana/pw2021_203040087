<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "prakpw_otomotif_203040087");

    return $conn;
} 

// function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();
    $picture = htmlspecialchars($data['picture']);
    $nama = htmlspecialchars($data['nama']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO otomotif
                VALUES
                ('', '$picture', '$nama', '$description', '$price', '$category')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi delet data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM otomotif WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $picture = htmlspecialchars($data['picture']);
    $nama = htmlspecialchars($data['nama']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "UPDATE otomotif
            SET
            picture = '$picture',
            name = '$nama',
            description = '$description',
            price = '$price',
            category = '$category',
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// REGISTRASI
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
    return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

?>