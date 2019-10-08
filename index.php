<?php
    $serverski_niz = [
        'ime servera' => $_SERVER['SERVER_NAME'],
        'softver servera' => $_SERVER['SERVER_SOFTWARE']
    ];

    /*echo $serverski_niz['ime servera'];
    echo '<br>';
    echo $serverski_niz['softver servera'];*/

    foreach($serverski_niz as $kljuc => $vrednost){
        echo $kljuc.":".$vrednost."<br>";
    }

    // print_r($serverski_niz);

    $klijentski_niz = [
        "IP adresa klijenta" => $_SERVER['REMOTE_ADDR'],
        "Port klijenta" => $_SERVER['REMOTE_PORT']
    ];
    echo '<hr>';
    echo '<hr>';
    
    foreach($klijentski_niz as $kljuc => $vrednost){
        echo $kljuc.":".$vrednost."<br>";
    }

?>