<?php
    function perkenalan ($nama,$salam="Halo") {
        echo $salam . ", " ." <br>";
        echo "Saya nama saya ".$nama." <br>";
        echo "Saya sedang belajar PHP <br>";
    } 
    perkenalan("Alex","Selamat Datang");
    $saya = "cocoy";
    $ucapansalam ="Selamat pagi";
    perkenalan($saya);
?>