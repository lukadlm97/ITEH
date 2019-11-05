<?php
//Primer 6: Generisanje JSON fajla u posebnom fajlu

// uspostavljanje konekcije
require_once "konekcija.php";

$upit = "SELECT * FROM predmeti ORDER BY id ASC";

if (!$rezultat = $mysqli->query($upit)) {
    //ako se upit ne izvrši
    $json_podaci = '{

    }';
} else {
    //ako je upit vratio neke redove
    if ($rezultat->num_rows > 0) {
        // početak elementa predmeti, koji je niz
        $json_podaci = '{"predmeti":';

        // prazan niz, koji ćemo popunjavati kako prolazimo kroz vraćene redove uz baze i njihove kolone
        $niz = array();
        while ($red = $rezultat->fetch_object()) {
            // kao prvi sledeći element gore napravljenog niza čuvamo trenutni red

        }
        // pretvaramo niz u json objekat
        // podsetnik da je json tekst, sa njim se može raditi kao sa stringovima

        // kraj elementa predmeti
        $json_podaci .= '}';
    } else {
        //ako nema rezultata u bazi
        $json_podaci = '{"greska":"Nema rezultata."}';
    }
}
//otvaranje novog fajla

//upis podataka u fajl

//zatvaranje fajla

echo "JSON fajl podaci.json je generisan!";
