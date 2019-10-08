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

    print_r($serverski_niz);

?>