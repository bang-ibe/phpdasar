<?php
    $mahasiswa = ["John Doe", "165090807111005", "Fisika", "johndoe@rocketmail.com"];

    $mahasiswa2 = [
        ["John Doe", "165090807111005", "Fisika", "johndoe@rocketmail.com"],
        ["Bang Dul", "165090807111000", "Sastra Mesin", "duldul@rocketmail.com"]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach?>
    </ul>

    <h2>Nama Mahasiswa</h2>
    <ul>
            <li><?= $mahasiswa[0]; ?></li>
            <li><?= $mahasiswa[1]; ?></li>
            <li><?= $mahasiswa[2]; ?></li>
            <li><?= $mahasiswa[3]; ?></li>

    </ul>

    <ul>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa2 as $mhs2): ?>
        <li>Nama : <?= $mhs2[0]; ?></li>
        <li>Jurusan : <?= $mhs2[1]; ?></li>
        <li>Jurusan : <?= $mhs2[2]; ?></li>
        <li>Email : <?= $mhs2[3]; ?></li>
        <br>
    <?php endforeach?>
    </ul>
</body>
</html>