<?php
// proveravamo da li je prosleđen parametar pod ključem UNOS u GET zahtevu
if (!isset($_GET["unos"])) {
    echo "Parametar unos nije prosleđen!";
} else {
    $pomocna = $_GET["unos"];
    include "../konekcija.php";

    // upit koji vraća ID i NAZIV države iz baze ako naziv države počinje stringom koji je prosleđen kao parametar UNOS
    // sortirati po nazivu države
    $upit = "SELECT* FROM drzava WHERE drzava LIKE '$pomocna%' ORDER BY drzava";

    // čuvamo rezultat upita
    $rezultat = $mysqli->query($upit);

    // ako u bazi ne postoji takva država, rezultat će imati 0 redova
    if ($rezultat->num_rows) {
        echo "U bazi ne postoji država koja počinje na " . $pomocna;
    } else {
        while ($red = $rezultat->fetch_object()) {
            ?>
            <!-- kada se klikne na neku opciju, poziva se funkcija place() iz index.html, a parametar je trenutni objekat $red -->
            <a href="#" onclick="place(this)"><?php echo $red->drzava; ?></a>
            <br />
<?php
        }
    }
    $mysqli->close();
}
?>