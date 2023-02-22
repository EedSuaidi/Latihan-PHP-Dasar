<?php

session_start();

if( !isset($_SESSION["login"]))  {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diupdate atau tidak
    if( edit($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    }
    
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Edit data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sw["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $sw["gambar"] ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $sw["nama"] ?>">
            </li>
            <li>
                <label for="nis">NIS :</label>
                <input type="text" name="nis" id="nis" required value="<?= $sw["nis"] ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value="<?= $sw["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $sw["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <br>
                <img src="img/<?= $sw["gambar"]; ?>" alt="" width="50px"> 
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>
        </ul>
    </form>

</body>
</html>