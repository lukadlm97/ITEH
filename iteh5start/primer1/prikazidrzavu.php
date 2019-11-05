<?php
// proveravamo da li je prosleđen parametar pod ključem ID u GET zahtevu
if (false) {
    echo "Parametar ID nije prosleđen!";
} else {
    // ako jeste prosleđen, čuvamo ga u promenljivoj $pomocna
    $pomocna = $_GET["id"];

    //uspostavljanje konekcije
    include "../konekcija.php";

    //upit za vraćanje podataka o državi koja je selektovana (preko ID-ja)
    $upit = "";

    // čuvamo rezultat prethodnog upita
    $rezultat;

    //ispis naziva kolona u tabeli
    echo "<table border='1'>
            <tr>
            <th>Država</th>
            <th>Većinski narod</th>
            <th>Broj stanovnika</th>
            <th>Glavni grad</th>
            <th>Kontinent</th>
            </tr>";
    //ispis podataka o zemlji
    while ($red = $rezultat->fetch_object()) {
        echo "<tr>";
        // dodati odgovarajuće vrednosti između tagova za elemente reda
        echo "<td>" . "</td>";
        echo "<td>" . "</td>";
        echo "<td>" . "</td>";
        echo "<td>" . "</td>";
        echo "<td>" . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $mysqli->close();
}
