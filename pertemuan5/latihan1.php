<?php

// array
// variabel yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda

// pasangan kkey and value, key-nya index kalo 

// cara lama 
$hari = array("senin", "selasa", "Rabu");

// cara baru
$bulan = ["Januari", "Februari"];  
$arr1 = [123, "tulisan", false];

// menamplikan array
// var_dump(expression), print_r(expression)
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

echo $arr1[0];
echo "<br>";

echo $bulan[1];
echo "<br>";
echo "<br>";

var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";

echo "<br>";
var_dump($hari);

?>