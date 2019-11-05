<?php
//Primer 4: Parsiranje JSON fajla
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
    <title>ITEH</title>
</head>

<body>
    <?php
    // uzimamo sadržaj fajla primer1.json

    // pretvorimo uzeti sadržaj u json objekat

    ?>
    <table>
        <tr>
            <td>Naziv</td>
            <td>Semestar</td>
            <td>Vrsta</td>
            <td>Br.prijavljenih studenata</td>
        </tr>
        <?php
        // prolazimo kroz niz predmeti
        // pristupamo elementima niza
        // ispisujemo vrednosti elemenata u skladu sa nazivima kolona gore
        foreach ($a as $a) {
            ?>
            <tr>
                <td><?php echo ""; ?></td>
                <td><?php echo ""; ?></td>
                <td><?php echo ""; ?></td>
                <td><?php echo ""; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>