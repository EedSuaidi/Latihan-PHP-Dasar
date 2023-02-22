<?php

    $i = 1;

    $siswa = [
        [
            "nama" => "Joni Susanto",
            "kelas" => "XII TKR 2",
            "alamat" => "Pemalang"
        ],
        [
            "nama" => "Intan Ayu",
            "kelas" => "XII TB 1",
            "alamat" => "Brebes"
        ],
        [
            "nama" => "Salma Karima",
            "kelas" => "XI RPL 3",
            "alamat" => "Batang"
        ]
    ];

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
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php foreach($siswa as $sw) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $sw["nama"] ?></td>
            <td><?= $sw["kelas"] ?></td>
            <td><?= $sw["alamat"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>