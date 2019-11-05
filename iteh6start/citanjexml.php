<?php
//Primer 1: Parsiranje XML fajla
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
    <title>ITEH</title>
</head>

<body>
    <?php
    // učitavanje SimpleXML objekta
    // prvi parametar se odnosi na XML koji se učitava, drugi parametar prosleđuje dodatne opcije, a treći parametar je true ako se XML uzima
    // iz URL-a (eksterni XML fajl), a false ukoliko se XML uzima iz string promenljive
    $predmeti = new SimpleXMLElement("podaci.xml",null,true);
    ?>
    <table>
        <tr>
            <td>Naziv</td>
            <td>Semestar</td>
            <td>Vrsta</td>
            <td>Broj prijavljenih studenata</td>
        </tr>
        <?php
        // otkomentarisati sledeci red
        foreach ($predmeti as  $predmet) {
        // prolazi se kroz čvorove XML dokumenta i čvorovi se prikazuju u tabeli
        ?>
        <tr>
            <td><?php echo "$predmet->naziv"; ?></td>
            <td><?php echo "$predmet->semestar"; ?></td>
            <td><?php echo "$predmet->vrsta"; ?></td>
            <td><?php echo "$predmet->broj_prijavljenih_studenata"; ?></td>
        </tr>
        <?php
        // otkomentarisati sledeci red
         }
        ?>
    </table>
</body>

</html>