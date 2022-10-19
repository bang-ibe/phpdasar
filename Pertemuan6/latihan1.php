<?php

$hari   = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "teks", true];

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $arr[0];
echo "<br>";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: burlywood;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            transition: 1s;
            float: left;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both
            ;
        }
    </style>
</head>
<body>
    <?php
        $angka = [1,2,3,4,5,6,7,8,9];
        $angka2 = [[1,2,3],[4,5,6],[7,8,9]];

    ?>
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    <!-- <br> -->
    <div class="clear"></div>
    <div class="kotak"><?php echo $angka2[1][1];?></div>
    
    <div class="clear"></div>

    <?php foreach($angka2 as $a2) :?>
        <?php foreach($a2 as $b) :?>
            <div class="kotak"> <?= $b; ?></div>
        <?php endforeach;?>  
        <div class="clear"></div>  
    <?php endforeach;?>
    <!-- <div class="kotak">5</div> -->

    
</body>
</html>