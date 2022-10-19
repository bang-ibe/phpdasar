<?php

// cek apakah tidak ada data di $_GET

if(!isset($_GET["Nama"]) || !isset($_GET["NIM"]) || !isset($_GET["Email"]) || !isset($_GET["Jurusan"])){
 header("Location: GET.php");
 exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?=$_GET["Gambar"];?>" alt=""></li>
        <li><?= $_GET["Nama"];?></li>
        <li><?= $_GET["NIM"];?></li>
        <li><?= $_GET["Email"];?></li>
        <li><?= $_GET["Jurusan"];?></li>
    </ul>
    <br>
    <a href="GET.php">kembali ke awal</a>
</body>
</html>