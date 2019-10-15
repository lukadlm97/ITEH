<?php
    include "kontroler.php";
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
    <form action="kontroler.php" method="POST">
        <input type="number" name="broj1"  placeholder="treci broj">
        <br>
        <select name="operator">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="mnozenje">*</option>
            <option value="deljenje">/</option>
        </select>
        <br>
        <input type="number" name="broj2" placeholder="drugi broj">
        <br>
        <button type="submit" name="izracunaj">Izracunaj</button>
    </form>
</body>
</html>