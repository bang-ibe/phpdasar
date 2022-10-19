<?php
// pengulangan
// for
// while
// do... while
// foreach

for($i = 0; $i < 5; $i++){
    echo "Hello World! <br>";
}
echo "<br>";

$ii = 0;
while($ii<5){
    echo "Hi there <br>";
    $ii++;
}

echo "<br>";

$i1 = 0;
do {
    echo "Hei! <br>";
    $i1++;
} while($i1 < 5);

echo "<br>";
$x = 2;
if ($x <2){
    echo  "benar";
} else if ($x == 20){
    echo "bingo";
} else{
    echo "salah";
}
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
    <table border="1" cellpadding="10">
        <?php for($i2 = 1; $i2 <=3 ; $i2++):?>
            <tr>
                <?php for($j = 1; $j<=5; $j++): ?>
                    <td><?php echo "$i2, $j" ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
    </table>
</body>
</html>