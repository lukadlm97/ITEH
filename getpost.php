<?php
    if(isset($_REQUEST['ime'])){
        echo htmlentities("Dobrodosla/a ".$_REQUEST['ime']);
    }else{
        echo "gost";
    }
    if(isset($_REQUEST['email'])){
        $email = $_GET['email'];
        if(strlen($email)>=10 && strpos($email,'.') && strpos($email,'@')){
            echo "Validacija uspesna!";
        }else{
            echo "validacija neuspesna!";
        }
    }
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
    <form action="getpost.php" method="get">
        <div>
            Ime:<br>
            <input type="text" name="ime">
        </div>
        <div>
            Email:<br>
            <input type="text" name="email">
            
        </div>
        <input type="submit" value="Posalji">
    </form>
</body>
</html>