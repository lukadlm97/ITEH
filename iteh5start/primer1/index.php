<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- sledi link od CDN za jQuery -->

    <!-- naša klijentska skripta -->
    <script type="text/javascript">
    // koristimo jquery da proverimo da li je završeno učitavanje dokumenta

    // koristimo ajax() metodu iz jquery-ja

    </script>
</head>

<body>
    <?php
    include "../konekcija.php";
    // upit koji vraća sve države
    $upit = "";
    // čuvanje rezultata upita u promenljivoj $rezultat
    $rezultat;
    ?>
    <form>
        <!-- korisnik iz padajućeg menija može da izabere ime države o kojoj želi da vidi podatke -->
        <b>Izaberi državu:</b>

        <!-- padajući meni pravimo preko elementa "select", a stavke padajućeg menija su elementi "option" -->
        <select name="drzave" id="kombo_drzave">
            <?php
            // dok postoje redovi u rezultatu, nad njima pozivamo funkciju fetch_object()
            // otkomentarisati sledeći red
            // while () {
            ?>
            <!-- atribut value treba da bude ID drŽave, a tekstualni sadržaj elementa option treba da bude IME DRŽAVE  -->
            <option value="<?php ?>"><?php ?></option>
            <?php
            // otkomentarisati sledeći red
            // }
            ?>
        </select>
    </form>
    <p>
        <div id="popuni"><b>Podaci o selektovanoj državi će biti prikazani ovde. Stranica se ne učitava ponovo.</b>
        </div>
    </p>
    <?php
    $mysqli->close();
    ?>
</body>

</html>