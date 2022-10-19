<?php

// $_GET["nama"] = "Dina aul";
// $_GET["nim"] = "165090801001";
// var_dump($_GET);

// https://localhost/phpdasar/Pertemuan7/GET.php?nama=pece triqadafi
// https://localhost/phpdasar/Pertemuan7/GET.php?nama=pece triqadafi&nim=165090807001

$mahasiswa3 = [
    ["Nama" => "esam", "NIM" => "165090807007", "email" => "esam.yahoo.co.id", "Jurusan" => "Fisika", "gambar"=>"esam.jpg"],
    ["Nama" => "budi", "NIM" => "165090807001", "email" => "budi.yahoo.co.id", "Jurusan" => "Fisika", "tugas" => [90,80, 100], "gambar"=>"budi.jpeg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa3 as $mhs3) : ?>
        <ul>
            <li><img src="img/<?= $mhs3["gambar"]; ?>" alt="" style="width: 100px; height 100px;"></li>
            <li><?= $mhs3["Nama"]; ?></li>
            <li><?= $mhs3["NIM"]; ?></li>
            <li><?= $mhs3["Jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

    <?php foreach($mahasiswa3 as $mhs): ?>
    <ul>
        <li>
            <a href="latihan2.php?Nama=<?= $mhs["Nama"];?>&NIM=<?=$mhs["NIM"];?>&Email=<?=$mhs["email"];?>&Jurusan=<?=$mhs["Jurusan"];?>&Gambar=<?=$mhs["gambar"];?>"> <?=$mhs["Nama"];?></li>
    </ul>
    <?php endforeach; ?>

    <br>
    <br>



</body>
</html>