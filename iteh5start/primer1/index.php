<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- sledi link od CDN za jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- naša klijentska skripta -->
    <script type="text/javascript">
    // koristimo jquery da proverimo da li je završeno učitavanje dokumenta
    $(document).ready(
        function(){
            $("#kombo_drzave").change(
                function(){
                    var vrednost = $("#kombo_drzave").val();
                    $.ajax({
                        url:"prikazidrzavu.php",
                        type: "get",
                        data: {
                            id:vrednost
                            },
                        success:function(podaci){
                            $("#popuni").html(podaci);
                        }
                    });
                    
                }
            );
        }
    );
    // koristimo ajax() metodu iz jquery-ja

    </script>
</head>

<body>
    <?php
    include "../konekcija.php";
    // upit koji vraća sve države
    $upit = "SELECT* FROM drzava";
    // čuvanje rezultata upita u promenljivoj $rezultat
    $rezultat = $mysqli->query($upit);
    ?>
    <form>
        <!-- korisnik iz padajućeg menija može da izabere ime države o kojoj želi da vidi podatke -->
        <b>Izaberi državu:</b>

        <!-- padajući meni pravimo preko elementa "select", a stavke padajućeg menija su elementi "option" -->
        <select name="drzave" id="kombo_drzave">
            <?php
            // dok postoje redovi u rezultatu, nad njima pozivamo funkciju fetch_object()
            // otkomentarisati sledeći red
             while ($red = $rezultat->fetch_object()) {
            ?>
            <!-- atribut value treba da bude ID drŽave, a tekstualni sadržaj elementa option treba da bude IME DRŽAVE  -->
            <option value="<?php $red->id ?>"><?php echo $red->drzava; ?></option>
            <?php
            // otkomentarisati sledeći red
             }
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