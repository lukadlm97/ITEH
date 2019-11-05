<?php
// proveravamo da li je prosleđen parametar pod ključem NAZIV u GET zahtevu
if (false) {
    echo "Parametar Naziv nije prosleđen!";
} else {
    $naziv = $_GET["naziv"];
    include "../konekcija.php";
    // upit koji vraća sve podatke o državi kojoj je naziv onaj koji je prosleđen kao parametar gore 
    $upit = "";
    // čuvamo rezultat upita
    $rezultat = $mysqli->query($upit);
    // ako postoji takva država u bazi
    if (true) {
        // vraćamo 0
        echo "0";
    } else {
        // u suprotnom vraćamo 1
        echo "1";
    }
    $mysqli->close();
}
