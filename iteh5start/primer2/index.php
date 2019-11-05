<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- sledi link od CDN za jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- naša klijentska skripta -->
    <script type="text/javascript">
        // kada je dokument učitan
        $(document).ready(function() {
            // selektujemo element čiji ID je txt, proveravamo kada je sklonjen fokus sa njega (bilo kojim tasterom)
           
        });

        // funkcija koja postavlja ime države u polje za pretragu
        function place(ele) {
            // postavljamo pronađenu vrednost u polje za pretragu

            // kada je odabrana vrednost, sakrivamo listu rezultata

        }
    </script>
    <style type="text/css">
        #livesearch {
            margin: 15px;
            margin-top: 2px;
            width: 320px;
            padding: 5px;
            border: 1px solid;
            display: none;
        }

        #txt {
            border: solid #A5ACB2;
            margin: 15px;
            width: 320px;
            padding: 5px;

        }
    </style>
</head>

<body onload="document.getElementById('txt').focus()">
    <form>
        <input type="text" id="txt" size="32">
        <div id="livesearch"></div>
    </form>
</body>

</html>