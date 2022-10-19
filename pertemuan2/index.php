<?php
// this is comment 
/*and also this 
comment*/

// sintaks php

// standar output 

// echo, print
// print_r
// var_dump

// echo "yooi";
// echo " ";
// print " yooi2";
// print_r(" ini pake print_r() ");
// var_dump(" pake var_dump()");
// echo true;
// echo false;
// echo "jum'at";

// php di dalam html
// html di dalam php

// variabel dan tipe data
$nama = "Baim";
echo "halo nama saya $nama";

echo "<br>";
// operator aritmatika
$x = 10;
$y = 3;
echo $x + $y;

echo "<br>";

// Concatenation
$nama_depan = "ibe";
$nama_belakang = "ganteng";
echo $nama_depan . " " . $nama_belakang;

// Assignment
// +, +=, *=, /=, %=. .=
echo "<br>";

$xq = 1;
$xq -= 5;
echo $x;
echo "<br>";

$nama = "ibe";
$nama .= " ";
$nama .= "cakep";
echo $nama; 

echo "<br>";
// perbandingan
var_dump(1 == "1"); echo "<br>";
var_dump(1 < 5); echo "<br>";
var_dump(1 >5); echo "<br><br>";

// identitas
var_dump(1 === "1"); echo "<br><br>"; // ini cek id dan tipe data

// logic
// &&, ||, !
$xa = 30;
var_dump($xa <20 || $xa % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, selamat datang <?php echo $nama;?> </h1>
    <p><?php echo "ini adalah php di paragraf"?></p>

    <?php echo "<p>ini paragraf dalam sintaks php</p>"?>
</body>
</html>
