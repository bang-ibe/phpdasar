<?php

$mahasiswa = ["John Doe", "165090807111005", "Fisika", "johndoe@rocketmail.com"];

$mahasiswa2 = [
    ["John Doe", "165090807111005", "Fisika", "johndoe@rocketmail.com"],
    ["Bang Dul", "165090807111000", "Sastra Mesin", "duldul@rocketmail.com"]
];



// array associative
// sama seperti array numerik, tapi key-nya buat sendiri bukan buat sendiri

$mahasiswa3 = [["Nama" => "esam", "NIM" => "165090807007", "email" => "esam.yahoo.co.id", "Jurusan" => "Fisika", "gambar"=>"esam.jpeg"],
["Nama" => "budi", "NIM" => "165090807001", "email" => "budi.yahoo.co.id", "Jurusan" => "Fisika", "tugas" => [90,80, 100], "gambar"=>"budi.jpeg"
]
];
// echo  $mahasiswa3["Jurusan"];
echo "<br>";
echo $mahasiswa3[1]["email"];
echo "<br>";
echo $mahasiswa3[1]["tugas"][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <li><?php echo $mahasiswa[0] ?></li>
        <li><?php echo $mahasiswa[1] ?></li>
        <li><?php echo $mahasiswa[2] ?></li>
        <li><?php echo $mahasiswa[3] ?></li>
    </ul>
<br>    
    <ul>
        <?php foreach($mahasiswa2 as $mhs2) : ?>
            <li>
                <img src="img/<?= $mhs3[gambar]; ?>" alt="">
            </li>
            
            <li>Nama : <?= $mhs2    [0] ?></li>
            <li>NIM : <?php echo $mhs2    [1] ?></li>
            <li>Jurusan : <?php echo   $mhs2    [2] ?></li>
            <li>Email : <?php echo  $mhs2    [3] ?></li>
            <br>

        <?php endforeach;?>
    </ul>
<br>
<h2>Associative Array</h2>
    <ul>
        <?php foreach($mahasiswa3 as $mhs3) : ?>
            <li>Nama : <?= $mhs3["Nama"] ?></li>
            <li>NIM : <?php echo $mhs3["NIM"] ?></li>
            <li>Jurusan : <?php echo   $mhs3["Jurusan"] ?></li>
            <li>Email : <?php echo  $mhs3["email"] ?></li>
            <br>

        <?php endforeach;?>
    </ul>
</body>
</html>