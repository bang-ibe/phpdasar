<?php
    echo date("l");
    echo "<br>";
    echo date("d");
    echo "<br>";
    echo date("M");
    echo "<br>";
    echo date("m");
    echo "<br>";
    echo date("l, d-M-Y");

    // Unix time / epoch
    echo "<br>";
    echo time();
    
    echo "<br>";
    echo date("l", time()+172800);

    echo "<br>";
    echo date("l", time()-60*60*24*100);

    // mktime
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    echo "<br>";
    echo date("l", mktime(0,0,0,4,2,1997));

    // strtotime
    echo "<br>";

    echo date("l", strtotime("2 april 1997"));
?>