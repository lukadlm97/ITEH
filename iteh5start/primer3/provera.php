<?php
// proveravamo da li je prosleđen parametar pod ključem NAZIV u GET zahtevu
if (!isset($_GET['naziv'])) {
    echo "Parametar Naziv nije prosleđen!";
} else {
    $naziv = $_GET["naziv"];
    include "../konekcija.php";
    // upit koji vraća sve podatke o državi kojoj je naziv onaj koji je prosleđen kao parametar gore 
    $upit = "SELECT* FROM drzava WHERE drzava='$naziv'";
    // čuvamo rezultat upita
    $rezultat = $mysqli->query($upit);
    // ako postoji takva država u bazi
    if ($rezultat->num_rows != 0) {
        // vraćamo 0
        echo "0";
    } else {
        // u suprotnom vraćamo 1
        echo "1";
    }
    $mysqli->close();
}
