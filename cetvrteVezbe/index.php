<?php
    include "db.php";
    $database = new Database("bazanovosti");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="index.php?stranica=select"> SELECT </a>
            </li>
            <li>
                <a href="index.php?stranica=insert"> INSERT </a>
            </li>
            <li>
                <a href="index.php?stranica=update"> UPDATE </a>
            </li>
            <li>
                <a href="index.php?stranica=delete"> DELETE </a>
            </li>
        </ul>

        <?php
            if(isset($_GET["stranica"])){
                $stranica = $_GET["stranica"];

                switch($stranica){
                    case "select":
                    //TODO: kreiranje metode select i prikazivanje na stranici
                    $database->select();
                    ?>
                    
                    <div>
                        <?php
                            while($row = $database->getResult()->fetch_object()){
                                    echo "<h2>$row->naslov</h2>";
                                    echo "<p>$row->tekst</p>";
                                    echo "hr";
                            }
                        ?>
                    </div>
                            <?php
                                break;
                                case "insert";
                                    if(isset($_POST['insert'])){
                                        $podaci = array($_POST["naslov"],$_POST["tekst"]);
                                        if($database->insert($podaci)){
                                            echo "Uspesno dodato!";
                                        }else{
                                            echo "Neuspesno dodato!";
                                        }
                                        //TODO: jel uspesno
                                        
                                    }
                            ?>
                            <form action="index.php?stranica=insert" method="POST">
                                    Naslov:
                                    <br>
                                    <input type="text" name="naslov">
                                    <br>
                                    Tekst:
                                    <br>
                                    <input name="text" type="textarea">
                                    <br>
                                    <button type="submit" name="insert">INSERT</button>
                                    <br>
                            </form>

                            <?php

                            ?>
                    <?php
                    break;
                }
            }
         ?>
    </div>
</body>
</html>