<!-- // variable scope -->
<?php
// variable scope
$x = 10;
function tampilx(){
    // $x = 2;
    global$x; // cari variable di luar
    echo $x;
}

tampilx();
echo "<br>";
echo $x;

// SuperGlobals
// all of em are array associative, diprint pakai var_dump() or print_r()
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
echo "<br>";
var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
var_dump($_SERVER);
echo "<br>";
echo $_SERVER["NAME_SERVER"];
?>